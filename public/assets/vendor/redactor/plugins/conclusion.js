(function ($) {
  var selectedText = '';
  var pointHtml = '<input id="first-point" class="form-control conclusion-point-input"><hr>';
  var anotherPointHtml = ''
    + '<div class="point-item">'
      + '<div class="input-group">'
        + '<input class="form-control conclusion-point-input"/>'
        + '<span class="input-group-btn">'
          + '<a class="btn btn-danger dismiss" href=""><i class="fa fa-remove"></i></a>'
        + '</span>'
      + '</div>'
      + '<hr>'
    + '</div>';

  $('body').on('click', '#add-more-point', function (event) {
    event.preventDefault();
    $('#conclusion-points-content').append(anotherPointHtml);
  });

  $('body').on('click', '.dismiss', function (event) {
    event.preventDefault();
    $(this).closest('.point-item').remove();
  });

  $.Redactor.prototype.conclusion = function () {
    return {
      init: function () {
        var button = this.button.add('conclusion', this.lang.get('addconclusion'));
        this.button.setIcon(button, '<i class="fa fa-asterisk"></i>');
        this.button.addCallback(button, this.conclusion.show);
      },

      getTemplate: function () {
        return ''
          + '<div class="modal-section" id="redactor-modal-conclusion-insert">'
          + '<section id="conclusion-title">'
          + '<label>' + this.lang.get('conclusiontitle') + '</label>'
          + '<input class="form-control" id="conclusion-title-input" placeholder="'
              + this.lang.get('conclusion') + '"/>'
          + '</section>'
          + '<hr />'
          + '<section id="conclusion-points-content">'
          + '<label style="display: inline-block; margin: 0 10px 10px 0">' + this.lang.get('pointtext') + '</label>'
          + '<a class="btn btn-primary btn-sm" id="add-more-point" href="">'
          + '<span class="fa fa-plus"></span>'
          + '</a>'
          + pointHtml
          + '</section>'
          + '<section>'
          + '<button id="redactor-modal-button-action">Insert</button>'
          + '<button id="redactor-modal-button-cancel">Cancel</button>'
          + '</section>'
          + '</div>';
      },

      show: function () {
        this.modal.addTemplate('conclusion', this.conclusion.getTemplate());
        this.modal.load('conclusion', this.lang.get('addconclusion'), 700);


        this.modal.getActionButton().text(this.lang.get('insert'))
          .on('click', this.conclusion.insert);

        selectedText = $('.redactor').data('redactor').selection.text();

        if (!!selectedText) {
          $('#first-point').val(selectedText);
          selectedText = '';
        }

        this.modal.show();

      },

      insert: function () {
        var data = [];
        var title = $('#conclusion-title-input').val() || this.lang.get('conclusion');
        var template = '';
        var $cloned;

        $('.conclusion-point-input').each(function (i, input) {
          var value = $(input).val();
          if (!!value) {
            data.push(value);
          }
        });

        data.forEach(function (point, i) {
          template += '<li class="conclusion-point">'
            + '<span class="point-number">'
              + (i + $('.conclusion-point').length + 1)
            + '</span>'
            + '<div class="point-content"><p>'
              + point
            + '</p></div>'
            + '</li>';
        });

        template = ''
          + '<div class="conclusion">'
            + '<div class="conclusion-header">'
              + '<h2>' + title + '</h2>'
            + '</div>'
            + '<div class="conclusion-content">'
              + '<ul class="conclusion-point-list">'
                + template
              + '</ul>'
            + '</div>'
          + '</div>';

        this.modal.close();
        this.placeholder.hide();

        this.buffer.set();

        this.air.collapsed();
        this.insert.html(template);

      }
    }
  }
})(jQuery);

