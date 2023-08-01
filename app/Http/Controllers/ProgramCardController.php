<?php

namespace App\Http\Controllers\WebsiteControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\WebsiteModels\DbkCurTbcategory;
use App\Models\WebsiteModels\DbkCurTbSubcategory;
use App\Models\WebsiteModels\DbkCurTbCourseCategory;
use App\Models\WebsiteModels\DbkCurTbCourse;
use App\Models\WebsiteModels\DbkCurTbCertification;
use App\Models\WebsiteModels\CmsCertificationProgram;
use App\Models\WebsiteModels\DbkCurTbCertificationCourse;
use App\Models\WebsiteModels\CmsCategoryProgram;

class ProgramCardController extends Controller
{
    public function getProgramCard()
    {

        $programCards = DB::select("
        SELECT 'Category' MainType, Category.CategoryID MainID, Category.Category MainTitle, IFNULL(Course.CourseID, '') SubID, IFNULL(Course.Course, '') SubTitle
        FROM cms_categoryprogram CategoryProgram
        INNER JOIN dbk_cur_tbcategory Category ON Category.CategoryID = CategoryProgram.CategoryID
        LEFT JOIN dbk_cur_tbsubcategory SubCategory ON SubCategory.CategoryID = Category.CategoryID AND SubCategory.IsDeleted = 'n'
        LEFT JOIN dbk_cur_tbcoursecategory CourseCategory ON CourseCategory.SubCategoryID = SubCategory.SubCategoryID
        LEFT JOIN dbk_cur_tbcourse Course ON Course.CourseID = CourseCategory.CourseID AND Course.IsDeleted = 'n' AND Course.IsActive = 'y'
        WHERE Category.IsDeleted = 'n'
        AND Category.IsActive = 'y'
        UNION ALL
        SELECT 'Certification' MainType, Certification.CertificationID MainID, Certification.Certification MainTitle, IFNULL(Course.CourseID, '') SubID, IFNULL(Course.Course, '') SubTitle
        FROM cms_certificationprogram CertificationProgram
        INNER JOIN dbk_cur_tbcertification Certification ON Certification.CertificationID = CertificationProgram.CertificationID
        LEFT JOIN dbk_cur_tbcertificationcourse CertificationCourse ON CertificationCourse.CertificationID = Certification.CertificationID AND CertificationCourse.IsDeleted = 'n'
        LEFT JOIN dbk_cur_tbcourse Course ON Course.CourseID = CertificationCourse.CourseID AND Course.IsDeleted = 'n' AND Course.IsActive = 'y'
        WHERE Certification.IsDeleted = 'n'
        AND Certification.IsActive = 'y'
        ORDER BY MainTitle, SubTitle
    ");

        return $programCards;
    }


    public function getProgramCard2()
    {
        $programCards2 = DB::table('dbk_cur_tbcourse')
            ->select('dbk_cur_tbcourse.Course', 'dbk_cur_tbcourse.Duration', 'dbk_cur_tbcourse.IsActive AS CourseIsActive', 'dbk_cur_tbsubcategory.SubCategory', 'dbk_cur_tbsubcategory.IsDeleted AS SubCategoryIsDeleted', 'dbk_cur_tbcategory.Category', 'dbk_cur_tbcategory.IsActive AS CategoryIsActive')
            ->join('dbk_cur_tbcoursecategory', 'dbk_cur_tbcourse.CourseID', '=', 'dbk_cur_tbcoursecategory.CourseID')
            ->join('dbk_cur_tbsubcategory', 'dbk_cur_tbcoursecategory.SubCategoryID', '=', 'dbk_cur_tbsubcategory.SubCategoryID')
            ->join('dbk_cur_tbcategory', 'dbk_cur_tbsubcategory.CategoryID', '=', 'dbk_cur_tbcategory.CategoryID')
            ->where('dbk_cur_tbcourse.IsActive', '=', 'y')
            ->where('dbk_cur_tbcourse.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbsubcategory.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbcategory.IsActive', '=', 'y')
            ->where('dbk_cur_tbcategory.IsDeleted', '=', 'n')
            ->get();

        echo ($programCards2);
        return $programCards2;
    }

    public function getCoursesAndCertifications()
    {
        // Retrieve courses with their respective category and subcategory information
        $coursesData = DbkCurTbcourse::join('dbk_cur_tbcoursecategory', 'dbk_cur_tbcourse.CourseID', '=', 'dbk_cur_tbcoursecategory.CourseID')
            ->join('dbk_cur_tbsubcategory', 'dbk_cur_tbcoursecategory.SubCategoryID', '=', 'dbk_cur_tbsubcategory.SubCategoryID')
            ->join('dbk_cur_tbcategory', 'dbk_cur_tbsubcategory.CategoryID', '=', 'dbk_cur_tbcategory.CategoryID')
            ->where('dbk_cur_tbcategory.IsActive', '=', 'y')
            ->where('dbk_cur_tbcategory.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbsubcategory.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbcourse.IsActive', '=', 'y')
            ->where('dbk_cur_tbcourse.IsDeleted', '=', 'n')
            ->select('dbk_cur_tbcategory.Category', 'dbk_cur_tbsubcategory.SubCategory', 'dbk_cur_tbcourse.Course')
            ->get();

        // Retrieve certifications with their respective category and subcategory information
        $certificationsData = DbkCurTbcertification::join('dbk_cur_tbcertificationcourse', 'dbk_cur_tbcertification.CertificationID', '=', 'dbk_cur_tbcertificationcourse.CertificationID')
            ->join('dbk_cur_tbcourse', 'dbk_cur_tbcertificationcourse.CourseID', '=', 'dbk_cur_tbcourse.CourseID')
            ->join('dbk_cur_tbcoursecategory', 'dbk_cur_tbcourse.CourseID', '=', 'dbk_cur_tbcoursecategory.CourseID')
            ->join('dbk_cur_tbsubcategory', 'dbk_cur_tbcoursecategory.SubCategoryID', '=', 'dbk_cur_tbsubcategory.SubCategoryID')
            ->join('dbk_cur_tbcategory', 'dbk_cur_tbsubcategory.CategoryID', '=', 'dbk_cur_tbcategory.CategoryID')
            ->where('dbk_cur_tbcategory.IsActive', '=', 'y')
            ->where('dbk_cur_tbcategory.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbsubcategory.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbcourse.IsActive', '=', 'y')
            ->where('dbk_cur_tbcourse.IsDeleted', '=', 'n')
            ->where('dbk_cur_tbcertification.IsActive', '=', 'y')
            ->where('dbk_cur_tbcertification.IsDeleted', '=', 'n')
            ->select('dbk_cur_tbcategory.Category', 'dbk_cur_tbsubcategory.SubCategory', 'dbk_cur_tbcertification.Certification', 'dbk_cur_tbcourse.Course')
            ->get();

        // Merge the two data sets into a single array
        $data = [
            'courses' => $coursesData,
            'certifications' => $certificationsData,
        ];

        // dd($data);
        return $data;
    }
}
