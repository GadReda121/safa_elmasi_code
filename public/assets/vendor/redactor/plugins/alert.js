(function ($) {
  var type = 'info';
  var selectedText = '';

  var icons = {
    info:    'fa fa-info-circle',
    warning: 'fa fa-warning',
    danger:  'fa fa-remove',
  };

  var alertClass = {
    info:    'custom-alert custom-alert-info',
    warning: 'custom-alert custom-alert-warning',
    danger:  'custom-alert custom-alert-danger',
  };


  $('body').on('change', '[name="alert_type"]', function() {
    type = $(this).val();
  });



  $.Redactor.prototype.alert = function () {
    return {
      init: function () {
        var button = this.button.add('custom-alert', this.lang.get('addalert'));
        this.button.setIcon(button, '<i class="fa fa-info-circle"></i>');
        this.button.addCallback(button, this.alert.show);
      },

      getTemplate: function () {
        return ''
          + '<div class="modal-section" id="redactor-modal-alert-insert">'
          + '<section>'
          + '<label>' + this.lang.get('type') + '</label>'
          + '<div class="radio">'
          + '<label><input type="radio" name="alert_type" value="info" checked>'
          + this.lang.get('information')
          + '</div>'
          + '<div class="radio">'
          + '<label><input type="radio" name="alert_type" value="warning">'
          + this.lang.get('warning')
          + '</div>'
          + '<div class="radio">'
          + '<label><input type="radio" name="alert_type" value="danger">'
          + this.lang.get('error')
          + '</div>'
          + '</section>'
          + '<hr />'
          + '<section id="alert_content">'
          + '<label>' + this.lang.get('alertmessage') + '</label>'
          + '<textarea id="redactor-insert-area" style="height: 160px;"></textarea>'
          + '</section>'
          + '<section>'
          + '<button id="redactor-modal-button-action">Insert</button>'
          + '<button id="redactor-modal-button-cancel">Cancel</button>'
          + '</section>'
          + '</div>';
      },

      show: function () {
        this.modal.addTemplate('alert', this.alert.getTemplate());
        this.modal.load('alert', this.lang.get('addalert'), 700);


        this.modal.getActionButton().text(this.lang.get('insert'))
          .on('click', this.alert.insert);

        selectedText = $('.redactor').data('redactor').selection.text();

        if (!!selectedText) {
          $('#redactor-insert-area').val(selectedText);
          selectedText = '';
        }

        // reset the radio buttons
        $('[name="alert_type"][value="info"]').attr('checked', true);
        type = 'info';

        this.modal.show();
      },

      insert: function () {
        var data = $('#redactor-insert-area').val();
        var template = '';

        if (!data) {
          return;
        }

        template = ''
          + '<div class="' + alertClass[type] + '">'
            + '<div class="icon">'
              + '<span class="' + icons[type] + '"></span>'
            + '</div>'
            + '<div class="content">'
              + '<p>' + data + '</p>'
            + '</div>'
          + '</div>'

        this.modal.close();
        this.placeholder.hide();

        this.buffer.set();

        this.air.collapsed();
        this.insert.html(template);
      }
    }
  }
})(jQuery);
