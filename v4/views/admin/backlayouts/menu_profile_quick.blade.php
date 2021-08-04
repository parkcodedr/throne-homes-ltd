<div class="navbar nav_title" style="border: 0;">
  <a href="{{ url('/home') }}" class="site_title"><i class="fa fa-paw"></i> <span>{{ join(' ',explode('_',$siteinfos->app_name)) }}!</span></a>
</div>

<div class="clearfix"></div>

<div class="profile clearfix">
  <div class="profile_pic">
    <img src="{{ asset('backend/images/img.jpg') }}" alt="..." class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>Welcome,</span>
    <h2>{{ ucfirst(strtolower($user->name)) }}</h2>
    <h2>Position : {{ ucfirst(strtolower($role)) }}</h2>
  </div>
</div>