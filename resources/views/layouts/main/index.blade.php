@include('includes.header.index')
<div class="wrapper">
@include('includes.menu.index')
<div class="main">
@include('includes.partials.navbar')
<main class="content">
<div class="container-fluid p-0">
@stack('headmain')
@yield('content')
</div>
</main>
@include('includes.partials.footnote')
</div>
</div>
@include('includes.footer.index')