@include('layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-hand-drawn-cartoon-green-landscape-background-sceneryspringgreengrasslandblue-skywhite-cloudsforestsunlightlandscape-image_88108.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="purple">
  <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    @yield('content')
    @include('layouts.footers.guest')
  </div>
</div>
