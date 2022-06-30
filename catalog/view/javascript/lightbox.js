$.fn.extend({
   lightBox: function(){
      $(this).each(function(){
         $(this).on('click', $.proxy(function(e) {
            e.preventDefault();
            var link = this;
            var obLightBox, prev, next, title, gallery;
            if(!!$(this).data('lightbox')) 
               gallery = $('[data-lightbox="'+$(this).data('lightbox')+'"]');
            var setNavActivity = function(index) {
               if(index==0)
                  prev.addClass('lightbox-inactive');
               else 
                  prev.removeClass('lightbox-inactive');
               if(index==(gallery.length-1))
                  next.addClass('lightbox-inactive');
               else 
                  next.removeClass('lightbox-inactive');
            }
            var navigate = function(e) {
               e.preventDefault();
               var cur_index = $(gallery).index(link);
               cur_index=$(this).data('nav')=='prev'?cur_index-1:cur_index+1;
               if(cur_index<0 || cur_index>=gallery.length)
                  return;
               var img = obLightBox.find('img');
               link = gallery[cur_index];
               img.prop('src',link.href);
               title.html(link.hasAttribute('title')?link.getAttribute('title'):'');
               setNavActivity(cur_index);
            };
            obLightBox = $('<div/>')
               .addClass('lightbox')
                  .append(
                     $('<img>')
                        .attr('src',link.href)
                        .attr('alt',''))
                  .append(
                     title = $('<div/>')
                        .addClass('lightbox-title')
                        .html(link.hasAttribute('title')?link.getAttribute('title'):''))
                  .append(
                     $('<a/>')
                        .addClass('lightbox-close')
                        .attr('title',"Close")
                        .attr('href',"#")
                        .on('click',function(e){
                           e.preventDefault();
                           obLightBox.remove();
                        }))
                  .append(
                     prev = $('<a/>')
                        .addClass('lightbox-prev')
                        .addClass('lightbox-inactive')
                        .attr('title',"Previous")
                        .attr('href',"#")
                        .data('nav','prev')
                        .on('click',navigate))
                  .append(
                     next = $('<a/>')
                        .addClass('lightbox-next')
                        .addClass('lightbox-inactive')
                        .attr('title',"Next")
                        .attr('href',"#")
                        .data('nav','next')
                        .on('click',navigate));
            if(!!gallery && gallery.length>1) {
               setNavActivity($(gallery).index(link));                               
            } else {
               prev.remove();
               next.remove();
            }
            $(document.body).append(obLightBox);
         }, this));
      });
   }
});
 
$('[data-lightbox]').lightBox();