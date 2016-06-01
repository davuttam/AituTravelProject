<div class="signin_wrapper">
    <div class="row">
      <div class="right_block">
        <div class="row">
            <form class="col-md-12 col-sm-12 col-xs-12" action="adminLoginProcess.php" name="form" method="post" ng-submit="login()" autocomplete="off">
            <h2 class="signup-heading">Signin</h2>
            <div class="row">
              <div class="input-field col-md-12 col-sm-12 col-xs-12">
                <i class="ion-coffee prefix"></i>
                <input id="icon_prefix-2" name="username" type="email"  autocomplete="off" required class="validate">
                <label for="icon_prefix-2">Email</label>
              </div>
              <div class="input-field col-md-12 col-sm-12 col-xs-12">
                <i class="ion-key prefix"></i>
                <input id="icon_prefix-3" name="password" type="password" autocomplete="off" required class="validate">
                <label for="icon_prefix-3">Password</label>
              </div>
            </div>
            <div class="clearfix"></div>
            <button type="submit" name="sign_in" ng-disabled="form.$invalid ||  dataLoading" class="btn btn-primary btn-block"><span ng-if="!dataLoading">Sign in</span> <img ng-if=" dataLoading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==" /></button>
          </form>
        </div> 
          <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
      </div>
    </div>
  </div>