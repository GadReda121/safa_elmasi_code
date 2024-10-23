(function ($) {
  var selectedText = '';
  var referenceHtml = '<input id="first-reference" class="form-control references-point-input"><hr>';
  var anotherReferenceHtml = ''
    + '<div class="reference-item">'
      + '<div class="input-group">'
        + '<input class="form-control references-point-input"/>'
        + '<span class="input-group-btn">'
          + '<a class="btn btn-danger dismiss" href=""><i class="fa fa-remove"></i></a>'
        + '</span>'
      + '</div>'
      + '<hr>'
    + '</div>';

  $('body').on('click', '#add-more-reference', function (event) {
    event.preventDefault();
    $('#references-points-content').append(anotherReferenceHtml);
  });

  $('body').on('click', '.dismiss', function (event) {
    event.preventDefault();
    $(this).closest('.reference-item').remove();
  });

  $.Redactor.prototype.references = function () {
    return {
      init: function () {
        var button = this.button.add('references', this.lang.get('addreferences'));
        this.button.setIcon(button, '<i class="fa fa-external-link"></i>');
        this.button.addCallback(button, this.references.show);
      },

      getTemplate: function () {
        return ''
          + '<div class="modal-section" id="redactor-modal-references-insert">'
          + '<section id="reference-title">'
          + '<label>' + this.lang.get('referencestitle') + '</label>'
          + '<input class="form-control" id="references-title-input" placeholder="'
              + this.lang.get('references') + '"/>'
          + '</section>'
          + '<hr />'
          + '<section id="references-points-content">'
          + '<label style="display: inline-block; margin: 0 10px 10px 0">' + this.lang.get('referencetext') + '</label>'
          + '<a class="btn btn-primary btn-sm" id="add-more-reference" href="">'
          + '<span class="fa fa-plus"></span>'
          + '</a>'
          + referenceHtml
          + '</section>'
          + '<section>'
          + '<button id="redactor-modal-button-action">Insert</button>'
          + '<button id="redactor-modal-button-cancel">Cancel</button>'
          + '</section>'
          + '</div>';
      },

      show: function () {
        this.modal.addTemplate('references', this.references.getTemplate());
        this.modal.load('references', this.lang.get('addreferences'), 700);


        this.modal.getActionButton().text(this.lang.get('insert'))
          .on('click', this.references.insert);

        selectedText = $('.redactor').data('redactor').selection.text();

        if (!!selectedText) {
          $('#first-reference').val(selectedText);
          selectedText = '';
        }

        this.modal.show();

      },

      insert: function () {
        var data = [];
        var title = $('#references-title-input').val() || this.lang.get('references');
        var template = '';
        var length = $('.article-references').length;

        $('.references-point-input').each(function (i, input) {
          var value = $(input).val();
          if (!!value) {
            data.push(value);
          }
        });

        data.forEach(function (point, i) {
          template += '<li id="reference' + (length ? length  + '' + (i + 1) : i + 1) + '">'
            + point + '</li>';
        });

        template = ''
          + '<div class="article-references">'
            + '<div class="article-references-header">'
              + '<h2>' + title + '</h2>'
            + '</div>'
            + '<div class="article-references-content">'
              + '<ol style="margin-top: 1rem;">' + template + '</ol>'
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

