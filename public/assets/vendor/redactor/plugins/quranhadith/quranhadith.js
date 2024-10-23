(function ($) {
  var type = 'quran';
  var selectedText = '';

  $('body').on('change', '[name="quran_hadith_type"]', function() {
    type = $(this).val();
  });

  $.Redactor.prototype.quranhadith = function () {
    return {
      init: function () {
        var button = this.button.add('quran-button', this.lang.get('addquranhadith'));
        this.button.setIcon(button, '<i class="fa fa-book"></i>');
        this.button.addCallback(button, this.quranhadith.show);
      },

      getTemplate: function () {
        return ''
          + '<div class="modal-section" id="redactor-modal-quran-insert">'
          + '<section>'
          + '<label>' + this.lang.get('type') + '</label>'
          + '<div class="radio">'
          + '<label><input type="radio" name="quran_hadith_type" value="quran" checked>'
          + this.lang.get('quran')
          + '</div>'
          + '<div class="radio">'
          + '<label><input type="radio" name="quran_hadith_type" value="hadith">'
          + this.lang.get('hadith')
          + '</div>'
          + '</section>'
          + '<hr />'
          + '<section id="aya-hadith-intro">'
          + '<label>' + this.lang.get('quranhadithintro') + '</label>'
          + '<input class="form-control" id="redactor-intro-input"/>'
          + '</section>'
          + '<hr />'
          + '<section id="aya-hadith-content">'
          + '<label>' + this.lang.get('quranhadithtext') + '</label>'
          + '<textarea id="redactor-insert-area" style="height: 160px;"></textarea>'
          + '</section>'
          + '<hr />'
          + '<section id="aya-hadith-reference">'
          + '<label>' + this.lang.get('quranhadithreference') + '</label>'
          + '<input class="form-control" id="redactor-reference-input"/>'
          + '</section>'
          + '<section>'
          + '<button id="redactor-modal-button-action">Insert</button>'
          + '<button id="redactor-modal-button-cancel">Cancel</button>'
          + '</section>'
          + '</div>';
      },

      show: function () {
        this.modal.addTemplate('quranhadith', this.quranhadith.getTemplate());
        this.modal.load('quranhadith', this.lang.get('addquranhadith'), 700);


        this.modal.getActionButton().text(this.lang.get('insert'))
          .on('click', this.quranhadith.insert);

        selectedText = $('.redactor').data('redactor').selection.text();

        if (!!selectedText) {
          $('#redactor-insert-area').val(selectedText);
          selectedText = '';
        }

        this.modal.show();

        $('[name="quran_hadith_type"][value="quran"]').attr('checked', true);
        type = 'quran';
      },

      insert: function () {
        // var type = $('[name="quran_hadith_type"]').val();
        var data = $('#redactor-insert-area').val();
        var reference = $('#redactor-reference-input').val();
        var intro = $('#redactor-intro-input').val();
        var template = '';



        // data = this.clean.stripTags(data);
        // reference = this.clean.stripTags(reference);

        template = ''
          + '<div class="' + type + '" dir="auto">'
          + ((!!intro) ? '<div class="intro"><p>' + intro + '</p></div>' : '')
          + '<div class="content">'
          + '<p>' + data + '</p>'
          + '</div>'
          + ((!!reference) ? '<div class="reference"><p>' + reference + '</p></div>' : '' )
          + '</div>';

        if (!data) {
          return;
        }


        this.modal.close();
        this.placeholder.hide();

        this.buffer.set();

        this.air.collapsed();
        this.insert.html(template);

      }
    }
  }
})(jQuery);

