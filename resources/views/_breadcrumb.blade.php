@php
    $urlSegments = request()->segments(); // Get the URL segments
    $breadcrumbUrl = ''; // Variable to store the breadcrumb URL
    $breadcrumbItems = []; // Array to store breadcrumb items
@endphp

{{-- Add the initial "Home" breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bc-nav">
        <li class="breadcrumb-item my-auto ps-5"><a href="home">Home</a></li>

        @foreach ($urlSegments as $index => $segment)
            @php
                $segmentDisplay = str_replace('-', ' ', ucwords($segment)); // Replace hyphens with spaces and capitalize each word
                $breadcrumbUrl .= '/' . $segment; // Append each segment to the URL
                
                if ($index === count($urlSegments) - 1) {
                    $breadcrumbItems[] = '<li class="breadcrumb-item active my-auto" aria-current="page">' . $segmentDisplay . '</li>';
                } else {
                    $breadcrumbItems[] = '<li class="breadcrumb-item"><a href="' . url($breadcrumbUrl) . '">' . $segmentDisplay . '</a></li>';
                }
            @endphp
        @endforeach



        @foreach ($breadcrumbItems as $breadcrumbItem)
            {!! $breadcrumbItem !!}
        @endforeach
    </ol>
</nav>
