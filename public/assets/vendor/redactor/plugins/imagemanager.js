(function($)
{
    $.Redactor.prototype.imagemanager = function()
    {
        return {
            langs: {
                en: {
                    'upload': 'Upload',
                    'choose': 'Choose'
                }
            },
            init: function()
            {
                if (!this.opts.imageManagerJson)
                {
                    return;

                }

                this.modal.addCallback('image', this.imagemanager.load);
            },
            load: function()
            {
                var $box =this.modal.getModal().find('#redactor-image-manager-box');
                
                this.imagemanager.getData(this.opts.imageManagerJson,$box);
            },
            insert: function(e)
            {
                var $el = $(e.target);
				var json = $.parseJSON(decodeURI($el.attr('data-params')));

				this.image.insert(json, null);

            },
            pagination: function(data)
            {
                var nextPage = parseInt(data.current_page) +1;
                var previousPage = parseInt(data.current_page) -1;
                var paginationDiv = '<div class="text-center"><ul class="pagination">';
                if (data.current_page == 1)
                {
                    paginationDiv += '<li class="disabled"><span>&laquo;</span></li>';

                }
                else
                {
                    paginationDiv +='<li><a class="paginate" data-page="'+previousPage+'" rel="prev">&laquo;</a></li>';
                }
                
                    for(var i =data.current_page ; i<=parseInt(data.current_page+7) && i<=data.last_page  ; i++)
                    {
                        if(i == data.current_page)
                        {
                            paginationDiv += '<li class="active"><span>'+i+'</span></li>';
                        }
                        else
                        {
                            paginationDiv +='<li><a class="paginate" data-page="'+i+'">'+i+'</a></li>';

                        }
                    }
                
                if(data.current_page < data.last_page)
                {
                    paginationDiv +='<li><a class="paginate" data-page="'+nextPage+'"  rel="next">&raquo;</a></li>';
                }
                else
                {
                    paginationDiv +='<li class="disabled"><span>&raquo;</span></li>';
                }
                paginationDiv +='</ul></div>';

                return paginationDiv;
            },
            getData: function(url , $box){
                
                $.ajax({
                    dataType: 'json',
                    cache: false,
                    url: url,
                    success: $.proxy(function(data)
                    {
                        $box.html('');
                        $.each(data.data, $.proxy(function(key, val)
                        {
                          
                            var img = $('<img src="' + val.path_string + '"  data-params="' + encodeURI(JSON.stringify(val)) + '" style="width: 96px; height: 72px; margin: 0px 4px 2px 0px; cursor: pointer;" />');
                            $box.append(img);
                            $(img).click($.proxy(this.imagemanager.insert, this));

                        }, this));
                        if(data.current_page != 1 || data.current_page < data.last_page)
                        {
                            $box.append(this.imagemanager.pagination(data));
                            var imagemanager = this;

                            $('.paginate').click(function(){
                                imagemanager.imagemanager.getData(imagemanager.opts.imageManagerJson+'?page='+$(this).data('page'),$box);
                            });

                        }
                    }, this)
                });
            },

          
        };
    };
})(jQuery);