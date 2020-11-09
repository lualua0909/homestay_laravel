 <div class="footer">
            <div>
                <strong>Copyright</strong> homestay
            </div>
        </div>
        </div>
                @include('backend.include.right-slidebar');
    </div>

    <!-- Mainly scripts -->
    <script src="{!! URL::asset('cms') !!}/js/jquery-2.1.1.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/bootstrap.min.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Peity -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="{!! URL::asset('cms') !!}/js/inspinia.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jvectormap -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{!! URL::asset('cms') !!}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- EayPIE -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/easypiechart/jquery.easypiechart.js"></script>

    <!-- Sparkline -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="{!! URL::asset('cms') !!}/js/demo/sparkline-demo.js"></script>

     <!-- iCheck -->
    <script src="{!! URL::asset('cms') !!}/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Peity -->
    <script src="{!! URL::asset('cms') !!}/js/demo/peity-demo.js"></script>


    <!-- Chosen -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/chosen/chosen.jquery.js"></script>

  <!-- JSKnob -->
  <script src="{!! URL::asset('cms') !!}/js/plugins/jsKnob/jquery.knob.js"></script>

  <!-- Input Mask-->
   <script src="{!! URL::asset('cms') !!}/js/plugins/jasny/jasny-bootstrap.min.js"></script>

  <!-- Data picker -->
  <script src="{!! URL::asset('cms') !!}/js/plugins/datapicker/bootstrap-datepicker.js"></script>

  <!-- NouSlider -->
  <script src="{!! URL::asset('cms') !!}/js/plugins/nouslider/jquery.nouislider.min.js"></script>

  <!-- Switchery -->
  <script src="{!! URL::asset('cms') !!}/js/plugins/switchery/switchery.js"></script>

   <!-- IonRangeSlider -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

   <!-- iCheck -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/iCheck/icheck.min.js"></script>

   <!-- MENU -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/metisMenu/jquery.metisMenu.js"></script>

   <!-- Color picker -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

   <!-- Clock picker -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/clockpicker/clockpicker.js"></script>

   <!-- Image cropper -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/cropper/cropper.min.js"></script>

   <!-- Date range use moment.js same as full calendar plugin -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/fullcalendar/moment.min.js"></script>

   <!-- Date range picker -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/daterangepicker/daterangepicker.js"></script>

   <!-- Select2 -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/select2/select2.full.min.js"></script>

   <!-- TouchSpin -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

   <!-- Tags Input -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

   <!-- Dual Listbox -->
   <script src="{!! URL::asset('cms') !!}/js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>
   <script src="{!! URL::asset('public/js/custom.js') !!}"> </script>

   @toastr_js
   @toastr_render

   <script>
       $(document).ready(function(){

         // Cap nhat tien ich :

         $(".edit-ax").click(function(){
          var id = $(this).attr("id");

            var url = "<?php echo url('/') ?>/admin/utilities/edit/"+id;

                       $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        data: id,
                        success: function (data, textStatus, xhr) {
                            console.log(data);
                            $("#title").val(data['title']);

                            var icon = "Xem trước : <img src='<?php echo url('/') ?>/public/img/"+data['icon']+"'>";
                            document.getElementById("review").innerHTML = icon;
                            $("#created_at").val(data['created_at']);
                            $("#updated_at").val(data['updated_at']);

                            var action = "<?php echo url('/'); ?>/admin/utilities/update/"+id;
                            document.getElementById("actionUpdate").action =  action;
                        },
                        error: function (xhr, textStatus, errorThrown) {
                            console.log('Error in Operation');
                        }
                     });
                });

       // Image avatar

       $("#preview-image").click(function(){
          $("#avatar").click();
       });

         $("#inputImage").click(function(){
            $("#avatar").click();
         });

          function readURL(input) {

     if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function(e) {
             $('#preview-image').attr('src', e.target.result);
         }

         reader.readAsDataURL(input.files[0]);
     }
 }

     $("#avatar").change(function() {
         readURL(this);
     });

     // End Image avatar



           $('.tagsinput').tagsinput({
               tagClass: 'label label-primary'
           });

           var $image = $(".image-crop > img")
           $($image).cropper({
               aspectRatio: 1.618,
               preview: ".img-preview",
               done: function(data) {
                   // Output the result data for cropping image.
               }
           });

           var $inputImage = $("#inputImage");
           if (window.FileReader) {
               $inputImage.change(function() {
                   var fileReader = new FileReader(),
                           files = this.files,
                           file;

                   if (!files.length) {
                       return;
                   }

                   file = files[0];

                   if (/^image\/\w+$/.test(file.type)) {
                       fileReader.readAsDataURL(file);
                       fileReader.onload = function () {
                           $inputImage.val("");
                           $image.cropper("reset", true).cropper("replace", this.result);
                       };
                   } else {
                       showMessage("Please choose an image file.");
                   }
               });
           } else {
               $inputImage.addClass("hide");
           }

           $("#download").click(function() {
               window.open($image.cropper("getDataURL"));
           });

           $("#zoomIn").click(function() {
               $image.cropper("zoom", 0.1);
           });

           $("#zoomOut").click(function() {
               $image.cropper("zoom", -0.1);
           });

           $("#rotateLeft").click(function() {
               $image.cropper("rotate", 45);
           });

           $("#rotateRight").click(function() {
               $image.cropper("rotate", -45);
           });

           $("#setDrag").click(function() {
               $image.cropper("setDragMode", "crop");
           });

           $('#data_1 .input-group.date').datepicker({
               todayBtn: "linked",
               keyboardNavigation: false,
               forceParse: false,
               calendarWeeks: true,
               autoclose: true
           });

           $('#data_2 .input-group.date').datepicker({
               startView: 1,
               todayBtn: "linked",
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true,
               format: "dd/mm/yyyy"
           });

           $('#data_3 .input-group.date').datepicker({
               startView: 2,
               todayBtn: "linked",
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true
           });

           $('#data_4 .input-group.date').datepicker({
               minViewMode: 1,
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true,
               todayHighlight: true
           });

           $('#data_5 .input-daterange').datepicker({
               keyboardNavigation: false,
               forceParse: false,
               autoclose: true
           });

           var elem = document.querySelector('.js-switch');
           var switchery = new Switchery(elem, { color: '#1AB394' });

           var elem_2 = document.querySelector('.js-switch_2');
           var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

           var elem_3 = document.querySelector('.js-switch_3');
           var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

           $('.i-checks').iCheck({
               checkboxClass: 'icheckbox_square-green',
               radioClass: 'iradio_square-green'
           });

           $('.demo1').colorpicker();

           var divStyle = $('.back-change')[0].style;
           $('#demo_apidemo').colorpicker({
               color: divStyle.backgroundColor
           }).on('changeColor', function(ev) {
                       divStyle.backgroundColor = ev.color.toHex();
                   });

           $('.clockpicker').clockpicker();

           $('input[name="daterange"]').daterangepicker();

           $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

           $('#reportrange').daterangepicker({
               format: 'MM/DD/YYYY',
               startDate: moment().subtract(29, 'days'),
               endDate: moment(),
               minDate: '01/01/2012',
               maxDate: '12/31/2015',
               dateLimit: { days: 60 },
               showDropdowns: true,
               showWeekNumbers: true,
               timePicker: false,
               timePickerIncrement: 1,
               timePicker12Hour: true,
               ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
               },
               opens: 'right',
               drops: 'down',
               buttonClasses: ['btn', 'btn-sm'],
               applyClass: 'btn-primary',
               cancelClass: 'btn-default',
               separator: ' to ',
               locale: {
                   applyLabel: 'Submit',
                   cancelLabel: 'Cancel',
                   fromLabel: 'From',
                   toLabel: 'To',
                   customRangeLabel: 'Custom',
                   daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                   monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                   firstDay: 1
               }
           }, function(start, end, label) {
               console.log(start.toISOString(), end.toISOString(), label);
               $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
           });

           $(".select2_demo_1").select2();
           $(".select2_demo_2").select2();
           $(".select2_demo_3").select2({
               placeholder: "Select a state",
               allowClear: true
           });


           $(".touchspin1").TouchSpin({
               buttondown_class: 'btn btn-white',
               buttonup_class: 'btn btn-white'
           });

           $(".touchspin2").TouchSpin({
               min: 0,
               max: 100,
               step: 0.1,
               decimals: 2,
               boostat: 5,
               maxboostedstep: 10,
               postfix: '%',
               buttondown_class: 'btn btn-white',
               buttonup_class: 'btn btn-white'
           });

           $(".touchspin3").TouchSpin({
               verticalbuttons: true,
               buttondown_class: 'btn btn-white',
               buttonup_class: 'btn btn-white'
           });

           $('.dual_select').bootstrapDualListbox({
               selectorMinimalHeight: 160
           });


       });

       $('.chosen-select').chosen({width: "100%"});

       $("#ionrange_1").ionRangeSlider({
           min: 0,
           max: 5000,
           type: 'double',
           prefix: "$",
           maxPostfix: "+",
           prettify: false,
           hasGrid: true
       });

       $("#ionrange_2").ionRangeSlider({
           min: 0,
           max: 10,
           type: 'single',
           step: 0.1,
           postfix: " carats",
           prettify: false,
           hasGrid: true
       });

       $("#ionrange_3").ionRangeSlider({
           min: -50,
           max: 50,
           from: 0,
           postfix: "°",
           prettify: false,
           hasGrid: true
       });

       $("#ionrange_4").ionRangeSlider({
           values: [
               "January", "February", "March",
               "April", "May", "June",
               "July", "August", "September",
               "October", "November", "December"
           ],
           type: 'single',
           hasGrid: true
       });

       $("#ionrange_5").ionRangeSlider({
           min: 10000,
           max: 100000,
           step: 100,
           postfix: " km",
           from: 55000,
           hideMinMax: true,
           hideFromTo: false
       });

       $(".dial").knob();

       var basic_slider = document.getElementById('basic_slider');

       noUiSlider.create(basic_slider, {
           start: 40,
           behaviour: 'tap',
           connect: 'upper',
           range: {
               'min':  20,
               'max':  80
           }
       });

       var range_slider = document.getElementById('range_slider');

       noUiSlider.create(range_slider, {
           start: [ 40, 60 ],
           behaviour: 'drag',
           connect: true,
           range: {
               'min':  20,
               'max':  80
           }
       });

       var drag_fixed = document.getElementById('drag-fixed');

       noUiSlider.create(drag_fixed, {
           start: [ 40, 60 ],
           behaviour: 'drag-fixed',
           connect: true,
           range: {
               'min':  20,
               'max':  80
           }
       });


   </script>

</body>
</html>
