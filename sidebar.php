<div class="wrapper">
  <div class="left-bar">
    <div class="admin-logo">
      <div class="logo-holder pull-left">
        <img class="logo" src="images/logo.png" alt="logo"> &nbsp;&nbsp; &nbsp;&nbsp;<span class="logo-holder-text">Admin Panel</span> 
      </div>
      <!-- logo-holder -->      
      
    </div>
    <!-- admin-logo -->
    <ul class="list-unstyled menu-parent" id="mainMenu">
         <li ui-sref-active="current">
        <a href="" class="waves-effect waves-light">
          <i class="fa fa-home"></i>
          <span class="text">Dashboard</span>
        </a>
      </li> 
      <li ng-class="{current: ('base.home' | includedByState) || ('base.user_detail' | includedByState) || ('base.edit' | includedByState)  || ('base.seller_detail' | includedByState) || ('base.seller_edit' | includedByState) || ('base.seller_create' | includedByState) || ('base.create' | includedByState) }">
        <a class="waves-effect waves-light" ui-sref="base.home()">
          <i class="fa fa-building"></i>
          <span class="text">Manage Users</span>
        </a>
      </li>
      <li ng-class="{current: ('base.manufacture' | includedByState) || ('base.manufacturer_edit' | includedByState) || ('base.create_manufacturer' | includedByState)}">
        <a class="waves-effect waves-light" ui-sref="base.manufacture({ activepage : 1 })">
          <i class="fa fa-building"></i>
          <span class="text">Manage Banners</span>
        </a>
      </li>
      <li ng-class="{current: ('base.category_edit' | includedByState) || ('base.category' | includedByState) || ('base.category_detail' | includedByState) }">
        <a class="waves-effect waves-light" ui-sref="base.category({ activepage : 1 })">
          <i class="fa fa-folder"></i>
          <span class="text">Manage Categories</span>
        </a>
      </li>
      <li ng-class="{current: ('base.product' | includedByState) || ('base.create_product' | includedByState) || ('base.product_detail' | includedByState) || ('base.product_edit' | includedByState) || ('base.editAttribute' | includedByState) }">
        <a class="waves-effect waves-light" ui-sref="base.product({ activepage : 1 })">
          <i class="ion-cube"></i>
          <span class="text">Manage itennary</span>
        </a>
      </li>
      <li ng-class="{current: ('base.order_list' | includedByState) || ('base.order_detail' | includedByState)}" >
        <a class="waves-effect waves-light" ui-sref="base.order_list()">
          <i class="fa fa-dropbox"></i>
          <span class="text">Manage Orders</span>
        </a>
      </li>
      <li ng-class="{current: ('base.request_list' | includedByState)}" >
        <a class="waves-effect waves-light" ui-sref="base.request_list()">
          <i class="fa fa-dropbox"></i>
          <span class="text">Manage Request</span>
        </a>
      </li>
    </ul>
  </div>
<!-- left-bar -->

  <div class="content" id="content">
    
    <div class="overlay"></div>     
    
    
  <!-- /top-bar -->
   
  </div>

 
  <!-- /Right-bar -->
</div>
<!-- wrapper -->