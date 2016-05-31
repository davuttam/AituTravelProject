<div class="content" id="content">
  <img  src="images/ajax-loader.gif" class="loader-position"/>
  <div class="main-content">
    <div class="col-md-12">
          <div class="buttons-list">
            <div class="pull-right">
              <a ui-sref="base.create_manufacturer()" class="btn btn-primary">Add Manufacturer</a>
            </div>
          </div>
        </div>
    <div class="padding-top:75px">
      <section>
        <div class="row">
          <div class="col-md-12">
            <!-- panel -->
            <div class="panel panel-piluku panel-users">
              
              <div class="panel-body nopadding">
                <div class="table-responsive">
                  <table class="table table-hover product-list">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Logo</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="table-row" ng-repeat="manufacturer in manufacturers">
                        <td>{{ manufacturer.name }}</td>
                        <td>{{ manufacturer.title }}</td>
                        <td><img src="{{ const_url }}/bms/documents/manufacturer/{{ manufacturer.logo }}"> </td>
                        <td>
                          <a ui-sref="base.manufacturer_edit({ id: manufacturer.id })" class="btn btn-green" tooltip-placement="top" tooltip="Edit">
                              <i class="ion-android-create action-icons"></i>
                          </a>
                          <a href="" data-toggle="modal" data-target="#{{ manufacturer.id }}" class="btn btn-red" tooltip-placement="top" tooltip="Delete">
                              <i class="ion-android-delete action-icons"></i>
                          </a>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <div ng-include=" 'partials/pagination.html' "></div>
            <!-- /panel -->
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<div ng-repeat="manufacturer in manufacturers">
  <div class="modal fade" id="{{ manufacturer.id }}" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Are you sure to Delete {{ manufacturer.name }}</h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="button" ng-click="DeleteManufacture(manufacturer.id)" class="btn btn-primary" data-dismiss="modal">Delete</button>
        </div>
      </div>
    </div>
  </div>
</div>

