(function ($){
  $.Redactor.prototype.separator = function () {
    return {
      init: function () {
        var button = this.button.add('separator', 'add separator');
        this.button.setIcon(button, '<i class="fa fa-ellipsis-h"></i>');
        this.button.addCallback(button, this.separator.insert);
      },

      insert: function () {
        this.buffer.set();
        this.air.collapsed();
        this.insert.html('<hr />');
      }
    }
  }
})(jQuery);

