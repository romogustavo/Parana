<?php

/* SonataFormatterBundle:Ckeditor:browser.html.twig */
class __TwigTemplate_2854e9195b407df67ee058a8713ba170bafa5a7207e8e8768a0f32249c65e7b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle::empty_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'preview' => array($this, 'block_preview'),
            'list_table' => array($this, 'block_list_table'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'pager_results' => array($this, 'block_pager_results'),
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["ckParameters"] = array("CKEditor" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"));
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            padding: 20px 15px;
        }
    </style>

";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        \$(function () {
            \$(\".select\").click(function (e) {
                e.preventDefault();
                window.opener.CKEDITOR.tools.callFunction(";
        // line 34
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "js"), "html", null, true);
        echo ", \$(this).attr(\"href\"));
                window.close();
            });
        });
    </script>
";
    }

    // line 42
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 44
    public function block_list_table($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 46
        echo "
    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-body table-responsive no-padding\">
    ";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 51
            echo "

        <table class=\"table table-bordered table-striped\">
            ";
            // line 54
            $this->displayBlock('table_header', $context, $blocks);
            // line 82
            echo "
            ";
            // line 83
            $this->displayBlock('table_body', $context, $blocks);
            // line 107
            echo "
            ";
            // line 108
            $this->displayBlock('table_footer', $context, $blocks);
            // line 179
            echo "        </table>


    ";
        } else {
            // line 183
            echo "        <p class=\"notice\">
            ";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </p>
    ";
        }
        // line 187
        echo "

            </div>
        </div>
    </div>
";
    }

    // line 54
    public function block_table_header($context, array $blocks = array())
    {
        // line 55
        echo "                <thead>
                <tr class=\"sonata-ba-list-field-header\">
                    ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 58
            echo "                        ";
            if ((($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch") || ($this->getAttribute($context["field_description"], "name", array()) == "_action"))) {
                // line 59
                echo "                            ";
                // line 60
                echo "                        ";
            } else {
                // line 61
                echo "                            ";
                $context["sortable"] = false;
                // line 62
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 63
                    echo "                                ";
                    $context["sortable"] = true;
                    // line 64
                    echo "                                ";
                    $context["current"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]);
                    // line 65
                    echo "                                ";
                    $context["sort_parameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")));
                    // line 66
                    echo "                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 67
                    echo "                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 68
                    echo "                            ";
                }
                // line 69
                echo "
                            ";
                // line 70
                ob_start();
                // line 71
                echo "                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                echo "\">
                                    ";
                // line 72
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 73
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array())), "method"), "html", null, true);
                echo "
                                        ";
                // line 74
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 75
                echo "                                </th>
                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 77
                echo "                        ";
            }
            // line 78
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </tr>
                </thead>
            ";
    }

    // line 83
    public function block_table_body($context, array $blocks = array())
    {
        // line 84
        echo "                <tbody>
                    ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 86
            echo "                        <tr>
                            <td colspan=\"";
            // line 87
            echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - 1), "html", null, true);
            echo "\">
                                <div>
                                    <a href=\"";
            // line 89
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\" style=\"float: left; margin-right: 6px;\">";
            echo $this->env->getExtension('sonata_media')->thumbnail($context["object"], "admin", array("width" => 75, "height" => 60));
            echo "</a>

                                    <strong><a href=\"";
            // line 91
            echo $this->env->getExtension('sonata_media')->path($context["object"], "reference");
            echo "\" class=\"select\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "name", array()), "html", null, true);
            echo "</a></strong> <br />
                                    ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["object"], "providerName", array()), array(), "SonataMediaBundle"), "html", null, true);
            if ($this->getAttribute($context["object"], "width", array())) {
                echo ": ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "width", array()), "html", null, true);
                if ($this->getAttribute($context["object"], "height", array())) {
                    echo "x";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["object"], "height", array()), "html", null, true);
                }
                echo "px";
            }
            // line 93
            echo "
                                    ";
            // line 94
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array")) > 0)) {
                // line 95
                echo "                                        - ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.formats", array(), "SonataMediaBundle"), "html", null, true);
                echo ":
                                        ";
                // line 96
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")), $this->getAttribute($context["object"], "id", array()), array(), "array"));
                foreach ($context['_seq'] as $context["name"] => $context["format"]) {
                    // line 97
                    echo "                                            <a href=\"";
                    echo $this->env->getExtension('sonata_media')->path($context["object"], $context["name"]);
                    echo "\" class=\"select\">";
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</a> ";
                    if ($this->getAttribute($context["format"], "width", array())) {
                        echo "(";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "width", array()), "html", null, true);
                        if ($this->getAttribute($context["format"], "height", array())) {
                            echo "x";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["format"], "height", array()), "html", null, true);
                        }
                        echo "px)";
                    }
                    // line 98
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                echo "                                    ";
            }
            // line 100
            echo "                                    <br />
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                </tbody>
            ";
    }

    // line 108
    public function block_table_footer($context, array $blocks = array())
    {
        // line 109
        echo "                <tr>
                    <th colspan=\"";
        // line 110
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())) - 2), "html", null, true);
        echo "\">
                        <div class=\"form-inline\">
                            <div class=\"pull-right\">
                                ";
        // line 113
        $this->displayBlock('pager_results', $context, $blocks);
        // line 135
        echo "                            </div>
                        </div>
                    </th>
                </tr>

                ";
        // line 140
        $this->displayBlock('pager_links', $context, $blocks);
        // line 177
        echo "
            ";
    }

    // line 113
    public function block_pager_results($context, array $blocks = array())
    {
        // line 114
        echo "                                    ";
        $this->displayBlock('num_pages', $context, $blocks);
        // line 118
        echo "
                                    ";
        // line 119
        $this->displayBlock('num_results', $context, $blocks);
        // line 123
        echo "
                                    ";
        // line 124
        $this->displayBlock('max_per_page', $context, $blocks);
        // line 134
        echo "                                ";
    }

    // line 114
    public function block_num_pages($context, array $blocks = array())
    {
        // line 115
        echo "                                        ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 119
    public function block_num_results($context, array $blocks = array())
    {
        // line 120
        echo "                                        ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 121
        echo "                                        &nbsp;-&nbsp;
                                    ";
    }

    // line 124
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 125
        echo "                                        <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
                                        <select class=\"per-page small\" id=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
                                            ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 128
            echo "                                                <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_per_page" => $context["per_page"]))), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">
                                                    ";
            // line 129
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
                                                </option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                                        </select>
                                    ";
    }

    // line 140
    public function block_pager_links($context, array $blocks = array())
    {
        // line 141
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 142
            echo "                        <tr>
                            <td colspan=\"";
            // line 143
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array())), "html", null, true);
            echo "\">
                                <div class=\"pagination pagination-centered\">
                                    <ul>
                                        ";
            // line 146
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) > 2)) {
                // line 147
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 1), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&laquo;</a></li>
                                        ";
            }
            // line 149
            echo "
                                        ";
            // line 150
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array()))) {
                // line 151
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "previouspage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&lsaquo;</a></li>
                                        ";
            }
            // line 153
            echo "
                                        ";
            // line 155
            echo "                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "getLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 156
                echo "                                            ";
                if (($context["page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
                    // line 157
                    echo "                                                <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                            ";
                } else {
                    // line 159
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $context["page"]), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 161
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "
                                        ";
            // line 163
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array()))) {
                // line 164
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&rsaquo;</a></li>
                                        ";
            }
            // line 166
            echo "
                                        ";
            // line 167
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nextpage", array())))) {
                // line 168
                echo "                                            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array())), "method"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">&raquo;</a></li>
                                        ";
            }
            // line 170
            echo "                                    </ul>
                                </div>
                            </td>
                        </tr>

                    ";
        }
        // line 176
        echo "                ";
    }

    // line 194
    public function block_list_filters_actions($context, array $blocks = array())
    {
        // line 195
        echo "    <ul class=\"nav navbar-nav navbar-right\">

        <li class=\"dropdown sonata-actions\">
            <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
        echo " <b class=\"caret\"></b></a>

            <ul class=\"dropdown-menu\" role=\"menu\">
                ";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) {
                // line 202
                echo "                    <li>
                        <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                            <i class=\"fa ";
                // line 204
                echo (($this->getAttribute($context["filter"], "isActive", array(), "method")) ? ("fa-check-square-o") : ("fa-square-o"));
                echo "\"></i>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                        </a>
                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo "            </ul>
        </li>
    </ul>
";
    }

    // line 213
    public function block_list_filters($context, array $blocks = array())
    {
        // line 214
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 215
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 216
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 217
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasActiveFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 220
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 221
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"clearfix\">
                            <div class=\"col-md-9\">
                                <div class=\"filter_container\">
                                    ";
            // line 226
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 227
                echo "                                        <div class=\"form-group\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($this->getAttribute($context["filter"], "isActive", array(), "method") && $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                            <label for=\"";
                // line 228
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                echo "\" class=\"col-sm-3 control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                echo "</label>
                                            ";
                // line 229
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 230
                echo "
                                            <div class=\"col-sm-2\">
                                                ";
                // line 232
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                            </div>

                                            <div class=\"col-sm-3\">
                                                ";
                // line 236
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 240
            echo "                                </div>
                            </div>
                            <div class=\"pull-right\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 245
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 246
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i> ";
            // line 248
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</button>

                                <a class=\"btn\" href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "ckeditor_browser", 1 => twig_array_merge(array("filters" => "reset"), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters")))), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                            </div>
                        </div>

                        ";
            // line 254
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()), (isset($context["ckParameters"]) ? $context["ckParameters"] : $this->getContext($context, "ckParameters"))));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 255
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 257
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Ckeditor:browser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 257,  728 => 255,  724 => 254,  715 => 250,  710 => 248,  704 => 246,  702 => 245,  695 => 240,  685 => 236,  678 => 232,  674 => 230,  672 => 229,  666 => 228,  651 => 227,  647 => 226,  639 => 221,  633 => 220,  625 => 217,  622 => 216,  619 => 215,  616 => 214,  613 => 213,  606 => 208,  593 => 204,  585 => 203,  582 => 202,  577 => 201,  571 => 198,  566 => 195,  563 => 194,  559 => 176,  551 => 170,  543 => 168,  541 => 167,  538 => 166,  530 => 164,  528 => 163,  525 => 162,  519 => 161,  511 => 159,  503 => 157,  500 => 156,  495 => 155,  492 => 153,  484 => 151,  482 => 150,  479 => 149,  471 => 147,  469 => 146,  463 => 143,  460 => 142,  457 => 141,  454 => 140,  449 => 132,  440 => 129,  431 => 128,  427 => 127,  423 => 126,  416 => 125,  413 => 124,  408 => 121,  405 => 120,  402 => 119,  392 => 115,  389 => 114,  385 => 134,  383 => 124,  380 => 123,  378 => 119,  375 => 118,  372 => 114,  369 => 113,  364 => 177,  362 => 140,  355 => 135,  353 => 113,  347 => 110,  344 => 109,  341 => 108,  336 => 105,  326 => 100,  323 => 99,  317 => 98,  302 => 97,  298 => 96,  293 => 95,  291 => 94,  288 => 93,  277 => 92,  271 => 91,  264 => 89,  259 => 87,  256 => 86,  252 => 85,  249 => 84,  246 => 83,  240 => 79,  234 => 78,  231 => 77,  227 => 75,  223 => 74,  218 => 73,  212 => 72,  200 => 71,  198 => 70,  195 => 69,  192 => 68,  189 => 67,  186 => 66,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  171 => 61,  168 => 60,  166 => 59,  163 => 58,  159 => 57,  155 => 55,  152 => 54,  143 => 187,  137 => 184,  134 => 183,  128 => 179,  126 => 108,  123 => 107,  121 => 83,  118 => 82,  116 => 54,  111 => 51,  109 => 50,  103 => 46,  100 => 45,  97 => 44,  92 => 42,  82 => 34,  72 => 28,  69 => 27,  55 => 17,  52 => 16,  48 => 12,  46 => 14,  11 => 12,);
    }
}
