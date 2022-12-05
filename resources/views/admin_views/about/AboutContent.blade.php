<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#theme"><i class="fa fa-plus"></i> Website Theme</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#banner"><i class="fa fa-camera"></i> Banner</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#vision"><i class="fa fa-eye"></i> Vision</a></li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#history"><i class="fa fa-book"></i> History</a></li>
            </ul>
        </div>


        <div class="tab-content">
            @include('admin_views.about.tab_components.Theme')
            <!---second Tab--->
            @include('admin_views.about.tab_components.Banner')
            @include('admin_views.about.tab_components.Vision')
            @include('admin_views.about.tab_components.History')
        </div>



    </div>
</div>
<!--**********************************
    Content body end
***********************************-->
