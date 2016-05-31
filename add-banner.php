<div class="content" id="content">
  <div class="main-content">
  <div class="panel panel-piluku">
      <div class="panel-heading">
        <h3><strong>Add Banner</strong></h3>
      </div>
      <br>
      <div class="panel-body">
    <form name="form" ng-submit="registerManufacturer()" enctype="multipart/form-data" class="registration-form">
       <div class="row form-group">
        <div class="col-md-11">
        <label>Name<span class="text-danger">*</span></label>
          <div class="input-field">
            <input type="text" name="name" class="form-control" required/>
           
          </div>
        </div>
      </div>
      <div class="row form-group">
        
        <div class="col-md-11">
          <div class="input-field">
          <label>Alternative</label>
            <input type="text" name="alt" class="prefilled form-control"/>
          </div>
        </div>
      </div>
      <div class="row form-group">
        
        <div class="col-md-11">
        <label>Title<span class="text-danger">*</span></label>
          <div class="input-field">
            <input type="text" name="title" class="form-control" value="" required/>
            
          </div>
        </div>
      </div>
      <div class="row form-group">
        <div class="col-md-11">
          <div class="input-field">
           <label>Logo Label</label>
            <input type="text" name="logoLabel" id="label" class="prefilled form-control" value="" />
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="col-md-11">
          <div class="input-field">
            <input type="file" name="manufacturerLogo"  accept="image/*" required/>
          </div>
        </div>
      </div>
      <br>
      <div class="form-actions pad-bottom-40">
        <div class="row">
          <div class="col-md-4">
            <button type="submit" ng-disabled="form.$invalid || dataLoading || !manufacturer.title" class="btn btn-block btn-primary"><span ng-if="!dataLoading">Create</span> <img ng-if="dataLoading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /></button>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>
</div>