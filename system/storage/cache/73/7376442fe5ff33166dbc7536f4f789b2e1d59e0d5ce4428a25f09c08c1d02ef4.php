<?php

/* extension/modification/editor.twig */
class __TwigTemplate_527229f3a7acff8a7ac91603c2d7551f666da23b2289f79ad0f4edf86b4147fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-erase-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_erase_theme"]) ? $context["button_erase_theme"] : null);
        echo "\" class=\"btn btn-success\" data-loading-text=\"";
        echo (isset($context["text_erasing"]) ? $context["text_erasing"] : null);
        echo "\"><i class=\"fa fa-eraser\"></i></button>
        <button type=\"button\" id=\"button-erase-data\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_erase_data"]) ? $context["button_erase_data"] : null);
        echo "\" class=\"btn btn-warning\" data-loading-text=\"";
        echo (isset($context["text_erasing"]) ? $context["text_erasing"] : null);
        echo "\"><i class=\"fa fa-eraser\"></i></button>
        <button type=\"button\" id=\"button-erase-image\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_erase_image"]) ? $context["button_erase_image"] : null);
        echo "\" class=\"btn btn-danger\" data-loading-text=\"";
        echo (isset($context["text_erasing"]) ? $context["text_erasing"] : null);
        echo "\"><i class=\"fa fa-eraser\"></i></button>
        <button type=\"button\" id=\"button-save\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_return"]) ? $context["button_return"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 26
        echo (isset($context["text_help_ocmod"]) ? $context["text_help_ocmod"] : null);
        echo "
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-modification\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 31
        echo (isset($context["text_xml_code"]) ? $context["text_xml_code"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <div class=\"col-sm-12\">
                <pre id=\"code\" style=\"width:100% !important; height:480px; position:relative; font-size:1.1em;\">";
        // line 34
        echo (isset($context["xml"]) ? $context["xml"] : null);
        echo "</pre>
                <input type=\"hidden\" name=\"modification_id\" value=\"";
        // line 35
        echo (isset($context["modification_id"]) ? $context["modification_id"] : null);
        echo "\" />
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
<script type=\"text/javascript\"><!--
  var editor = ace.edit(\"code\");
  editor.setTheme(\"ace/theme/cobalt\");
  editor.getSession().setMode(\"ace/mode/xml\");

  \$('#button-erase-theme').on('click', function() {
    \$('.alert').remove();
    \$.ajax({
      url: 'index.php?route=extension/modification/editor/erase_cache_theme&user_token=";
        // line 53
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      dataType: 'json',
      cache: false,
      beforeSend: function() {
        \$('#button-erase-theme').button('loading');
      },
      complete: function() {
        \$('#button-erase-theme').button('reset');
      },
      success: function(json) {
        if (json['error']) {
          \$('.panel-default').before('<div class=\"alert alert-danger\" role=\"alert\">'+json['error']+'</div>');
        } else {
          \$('.panel-default').before('<div class=\"alert alert-success\" role=\"alert\">'+json['success']+'</div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  \$('#button-erase-data').on('click', function() {
    \$('.alert').remove();
    \$.ajax({
      url: 'index.php?route=extension/modification/editor/erase_cache_data&user_token=";
        // line 77
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      dataType: 'json',
      cache: false,
      beforeSend: function() {
        \$('#button-erase-data').button('loading');
      },
      complete: function() {
        \$('#button-erase-data').button('reset');
      },
      success: function(json) {
        if (json['error']) {
          \$('.panel-default').before('<div class=\"alert alert-danger\" role=\"alert\">'+json['error']+'</div>');
        } else {
          \$('.panel-default').before('<div class=\"alert alert-success\" role=\"alert\">'+json['success']+'</div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  \$('#button-erase-image').on('click', function() {
    \$('.alert').remove();
    \$.ajax({
      url: 'index.php?route=extension/modification/editor/erase_cache_image&user_token=";
        // line 101
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      dataType: 'json',
      cache: false,
      beforeSend: function() {
        \$('#button-erase-image').button('loading');
      },
      complete: function() {
        \$('#button-erase-image').button('reset');
      },
      success: function(json) {
        if (json['error']) {
          \$('.panel-default').before('<div class=\"alert alert-danger\" role=\"alert\">'+json['error']+'</div>');
        } else {
          \$('.panel-default').before('<div class=\"alert alert-success\" role=\"alert\">'+json['success']+'</div>');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  \$('#button-save').on('click', function(){
    \$('.alert').remove();
    var id = \$('input[name=\"modification_id\"]').val();
    var xml_code = editor.getValue();
    \$.ajax({
      url: 'index.php?route=extension/modification/editor/save&user_token=";
        // line 127
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: { modification_id: id, xml: xml_code },
      cache: false,
      beforeSend: function() {
        \$('#button-save').button('loading');
      },
      complete: function() {
        \$('#button-save').button('reset');
      },
      success: function(json) {
        if (json['error']) {
          \$('.panel-default').before('<div class=\"alert alert-danger\" role=\"alert\">'+json['error']+'</div>');
        } else {
          \$('.panel-default').before('<div class=\"alert alert-success\" role=\"alert\">'+json['success']+'</div>');
          if (id == 0) { location.href = 'index.php?route=marketplace/modification&user_token=";
        // line 143
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "'; }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
//--></script> 

\t\t\t\t<script>
\t\t\t\t\t\$(document).on(\"submit\",\"form\",function(e){
\t\t\t\t\t\tsummernotes = \$('[data-toggle=\"summernote\"]');
\t\t\t\t\t\t\$.each(summernotes, function(){
\t\t\t\t\t\t\tif (\$(this).summernote('codeview.isActivated')) {
\t\t\t\t\t\t\t\t\$(this).summernote('codeview.deactivate'); 
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t</script>
";
        // line 163
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/modification/editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 163,  234 => 143,  215 => 127,  186 => 101,  159 => 77,  132 => 53,  111 => 35,  107 => 34,  101 => 31,  93 => 26,  87 => 23,  79 => 17,  68 => 15,  64 => 14,  59 => 12,  52 => 10,  46 => 9,  40 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" id="button-erase-theme" data-toggle="tooltip" title="{{ button_erase_theme }}" class="btn btn-success" data-loading-text="{{ text_erasing }}"><i class="fa fa-eraser"></i></button>*/
/*         <button type="button" id="button-erase-data" data-toggle="tooltip" title="{{ button_erase_data }}" class="btn btn-warning" data-loading-text="{{ text_erasing }}"><i class="fa fa-eraser"></i></button>*/
/*         <button type="button" id="button-erase-image" data-toggle="tooltip" title="{{ button_erase_image }}" class="btn btn-danger" data-loading-text="{{ text_erasing }}"><i class="fa fa-eraser"></i></button>*/
/*         <button type="button" id="button-save" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary" data-loading-text="{{ text_loading }}"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ return }}" data-toggle="tooltip" title="{{ button_return }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ name }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_help_ocmod }}*/
/*           <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         <form action="" method="post" enctype="multipart/form-data" id="form-modification" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_xml_code }}</legend>*/
/*             <div class="form-group">*/
/*               <div class="col-sm-12">*/
/*                 <pre id="code" style="width:100% !important; height:480px; position:relative; font-size:1.1em;">{{ xml }}</pre>*/
/*                 <input type="hidden" name="modification_id" value="{{ modification_id }}" />*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.9/ace.js" type="text/javascript" charset="utf-8"></script>*/
/* <script type="text/javascript"><!--*/
/*   var editor = ace.edit("code");*/
/*   editor.setTheme("ace/theme/cobalt");*/
/*   editor.getSession().setMode("ace/mode/xml");*/
/* */
/*   $('#button-erase-theme').on('click', function() {*/
/*     $('.alert').remove();*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/modification/editor/erase_cache_theme&user_token={{ user_token }}',*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       beforeSend: function() {*/
/*         $('#button-erase-theme').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-erase-theme').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['error']) {*/
/*           $('.panel-default').before('<div class="alert alert-danger" role="alert">'+json['error']+'</div>');*/
/*         } else {*/
/*           $('.panel-default').before('<div class="alert alert-success" role="alert">'+json['success']+'</div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   $('#button-erase-data').on('click', function() {*/
/*     $('.alert').remove();*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/modification/editor/erase_cache_data&user_token={{ user_token }}',*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       beforeSend: function() {*/
/*         $('#button-erase-data').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-erase-data').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['error']) {*/
/*           $('.panel-default').before('<div class="alert alert-danger" role="alert">'+json['error']+'</div>');*/
/*         } else {*/
/*           $('.panel-default').before('<div class="alert alert-success" role="alert">'+json['success']+'</div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   $('#button-erase-image').on('click', function() {*/
/*     $('.alert').remove();*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/modification/editor/erase_cache_image&user_token={{ user_token }}',*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       beforeSend: function() {*/
/*         $('#button-erase-image').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-erase-image').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['error']) {*/
/*           $('.panel-default').before('<div class="alert alert-danger" role="alert">'+json['error']+'</div>');*/
/*         } else {*/
/*           $('.panel-default').before('<div class="alert alert-success" role="alert">'+json['success']+'</div>');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   $('#button-save').on('click', function(){*/
/*     $('.alert').remove();*/
/*     var id = $('input[name="modification_id"]').val();*/
/*     var xml_code = editor.getValue();*/
/*     $.ajax({*/
/*       url: 'index.php?route=extension/modification/editor/save&user_token={{ user_token }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: { modification_id: id, xml: xml_code },*/
/*       cache: false,*/
/*       beforeSend: function() {*/
/*         $('#button-save').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-save').button('reset');*/
/*       },*/
/*       success: function(json) {*/
/*         if (json['error']) {*/
/*           $('.panel-default').before('<div class="alert alert-danger" role="alert">'+json['error']+'</div>');*/
/*         } else {*/
/*           $('.panel-default').before('<div class="alert alert-success" role="alert">'+json['success']+'</div>');*/
/*           if (id == 0) { location.href = 'index.php?route=marketplace/modification&user_token={{ user_token }}'; }*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script> */
/* */
/* 				<script>*/
/* 					$(document).on("submit","form",function(e){*/
/* 						summernotes = $('[data-toggle="summernote"]');*/
/* 						$.each(summernotes, function(){*/
/* 							if ($(this).summernote('codeview.isActivated')) {*/
/* 								$(this).summernote('codeview.deactivate'); */
/* 							}*/
/* 						})*/
/* 					})*/
/* 				</script>*/
/* {{ footer }}*/
