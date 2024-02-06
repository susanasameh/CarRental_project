
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.includes.headTable')

    <!-- Custom Theme Style -->
   @include('admin.includes.customThemeStyle')
            <!-- menu profile quick info -->
            @include('admin.includes.menuProfileQuickInfo')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
					@include('admin.includes.sideBar')
					<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            @include('admin.includes.menuFooterButtons')
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        @include('admin.includes.topNavigation')
        <!-- /top navigation -->

        <!-- page content -->
       @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('admin.includes.footerContent')
        <!-- /footer content -->
      </div>
    </div>

    @include('admin.includes.footerjsTable')

  </body>
</html>
