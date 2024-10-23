<!-- BEGIN VENDOR JS-->
<script src="{{ asset("app-assets/vendors/js/vendors.min.js") }}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script type="text/javascript" src="{{ asset("app-assets/vendors/js/ui/jquery.sticky.js") }}"></script>
<script src="{{ asset("app-assets/vendors/js/charts/chartist.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/vendors/js/charts/raphael-min.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/vendors/js/charts/morris.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/vendors/js/timeline/horizontal-timeline.js") }}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{ asset("app-assets/js/core/app-menu.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/js/core/app.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/js/scripts/customizer.js") }}" type="text/javascript"></script>
<script src="{{ asset("app-assets/vendors/js/tables/datatable/datatables.min.js") }}" type="text/javascript"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/brands.min.js" integrity="sha512-giAmE8KpCT6HP3DEwIvW9LYVnDs79iIaKEYFTjH62EWoglWgdAJa1ahiLUfoc3NFaAeWM6E3VdQyH1Ob2dmwQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/vendor/redactor/js/redactor.min.js') }}">
</script>

<script src="{{ asset('assets/vendor/redactor/lang/ar.js') }}"> </script>


<script src="{{ asset('assets/vendor/redactor/lang/en.js') }}"></script>
<script src="{{ asset('assets/vendor/redactor/plugins/alignment/alignment.js') }}"></script>
<script src="{{ asset('assets/vendor/redactor/plugins/table.js') }}"></script>
<script src="{{ asset('assets/vendor/redactor/plugins/textdirection.js') }}"></script>
<script src="{{ asset('assets/vendor/redactor/plugins/fontsize.js') }}"></script>
<script src="{{ asset('assets/vendor/redactor/plugins/fontcolor.js') }}"></script>


<script>
    $(function() {
        var lang = '{{ app()->getLocale() }}';
        if (lang == 'ar') {
            // dataTable for arabic and but buttons for arabic
            $(".dataTable").DataTable({
                // "responsive": true
                // , "lengthChange": true
                // , "autoWidth": true,
                // active buttons
                "dom": 'Bfrtip'
                , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                , "columnDefs": [{
                    "targets": [0]
                    , "searchable": true
                }]
                , "language": {
                    "sProcessing": "جارٍ التحميل..."
                    , "sLengthMenu": "أظهر _MENU_ مدخلات"
                    , "sZeroRecords": "لم يعثر على أية سجلات"
                    , "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل"
                    , "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل"
                    , "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)"
                    , "sInfoPostFix": ""
                    , "sSearch": "<span> ابحث:</span>"
                    , "sUrl": ""
                    , "oPaginate": {
                        "sFirst": "الأول"
                        , "sPrevious": "السابق"
                        , "sNext": "التالي"
                        , "sLast": "الأخير"
                    }
                },

            });


        } else {
            $(".dataTable").DataTable({
                "responsive": true
                , "lengthChange": true
                , "autoWidth": true
                , "columnDefs": [{
                    "targets": [0]
                    , "searchable": true
                }]
                , "dom": 'Bfrtip'
                , "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        }

        $(".delete").click(function(e) {
            var r = confirm("هل انت متأكد من الحذف؟");
            if (r == false) {
                e.preventDefault();
            }
            if (r == true) {
                window.location.href =
                    $(this).attr("href");
            }
        });
        $('.redactor').redactor({
            lang: '{{ app()->getLocale() }}'
            , plugins: ['alignment', 'table', 'textdirection', 'fontsize', 'fontcolor']
            , imageUpload: '{{ route("upload") }}'
            , imageUploadMethod: 'form'
            , imageUploadFormId: 'uploadForm'
            , imageResizable: true
            , imagePosition: true
            , imageFloatMargin: '20px'
            , imageFigure: true
            , imageFigureClass: 'img-fluid'
            , imageFigureStyle: 'width: 100%;'
            , minHeight: 300
            , direction: '{{ app()->getLocale() == "ar" ? "rtl" : "ltr" }}'
                // value
            , imageUploadCallback: function(data) {

            }
            , imageUploadErrorCallback: function(json) {
                console.log(json);
            }
        });
    });

</script>
