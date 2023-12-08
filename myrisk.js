(function ($) {
  Drupal.behaviors.myriskCustomBlock = {
    attach: function (context, settings) {
      const cells = $('.grid-item', context);
      const scoreContainer = $('#score', context);
      let score = 0;
      let activeCells = [];

      cells
        .mouseenter(function () {
          if (activeCells.length < 2) {
            $(this).css('border', '4px solid black');
          }
        })
        .mouseleave(function () {
          if (!activeCells.includes(this)) {
            $(this).css('border', '');
          }
        })
        .click(function () {
          const cellValue = parseInt($(this).data('value'));
          if (activeCells.length < 2 && !activeCells.includes(this)) {
            score += cellValue;
            scoreContainer.text(score);
            activeCells.push(this);
            if (activeCells.length === 1) {
              $(this).text('S');
            } else {
              $(this).text('P');
            }
            $(this).css('border', '4px solid black');
          } else {
            const index = activeCells.indexOf(this);
            if (index > -1) {
              activeCells.splice(index, 1);
              score -= cellValue;
              scoreContainer.text(score);
              $(this).css('border', '');
              $(this).text('');
            }
          }
        });
         
    }
  };
})(jQuery);

