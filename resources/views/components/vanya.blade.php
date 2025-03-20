<h1 class="mb-4 fs-2">
    @empty($title)
        @yield('title')
    @else
        {{$title}}
    @endempty
</h1>
{{--@if ($link && href)--}}
    <div class="col-2 text-end"></div>
<div class="bg-white rounded-4 shadow-sm p-4">
    {{$slot}}
</div>
