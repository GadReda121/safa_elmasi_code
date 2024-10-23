(function($)
{
    $.Redactor.prototype.iconic = function()
    {
        return {
            init: function ()
            {
                var icons = {
                    'format': '<i class="fa fa-paragraph"></i>',
                    'lists': '<i class="fa fa-list"></i>',
                    'link': '<i class="fa fa-link"></i>',
                    'horizontalrule': '<i class="fa fa-minus"></i>',
                    'image': '<i class="fa fa-picture-o"></i>',
                    'video': '<i class="fa fa-video-camera"></i>',
                    'table' : '<i class="fa fa-table"></i>',
                    'alignment': '<i class="fa fa-align-left"></i>',
                    'fontsize' : '<i class="fa fa-text-height"></i>',
                    'fontfamily': '<i class="fa fa-font"></i>',
                };
 
                $.each(this.button.all(), $.proxy(function(i,s)
                {
                    var key = $(s).attr('rel');
 
                    if (typeof icons[key] !== 'undefined')
                    {
                        var icon = icons[key];
                        var button = this.button.get(key);
                        this.button.setIcon(button, icon);
                    }
 
                }, this));
            }
        };
    };
})(jQuery);