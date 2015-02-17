<?php

/* SonataPageBundle:PageAdmin:tree.html.twig */
class __TwigTemplate_0bf9d9b66206d5294d4d1ceda710f06b18188f541d3518ceadda43b12638f5a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 14
        $context["tree"] = $this;
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/tree.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->env->loadTemplate("SonataPageBundle:PageAdmin:list_tab_menu.html.twig")->display(array("mode" => "tree", "action" =>         // line 43
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 44
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "currentSite" =>         // line 45
(isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite"))));
    }

    // line 49
    public function block_list_table($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <h1 class=\"box-title\">
                ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pages.tree_site_label", array(), "SonataPageBundle"), "html", null, true);
        echo "
                <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                        <strong class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")), "name", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
        foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
            // line 60
            echo "                            <li>
                                <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree", 1 => array("site" => $this->getAttribute($context["site"], "id", array()))), "method"), "html", null, true);
            echo "\">
                                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
            echo "
                                    ";
            // line 63
            if (((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")) && ($this->getAttribute($context["site"], "id", array()) == $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")), "id", array())))) {
                // line 64
                echo "                                        <span class=\"pull-right\">
                                            <i class=\"fa fa-check\"></i>
                                        </span>
                                    ";
            }
            // line 68
            echo "                                </a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </ul>
                </div>
            </h1>
        </div>
        <div class=\"box-content\">
            ";
        // line 76
        echo $context["tree"]->getpages((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true);
        echo "
        </div>
    </div>
";
    }

    // line 15
    public function getpages($__pages__ = null, $__admin__ = null, $__rootPages__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pages" => $__pages__,
            "admin" => $__admin__,
            "rootPages" => $__rootPages__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "    <ul";
            if ((isset($context["rootPages"]) ? $context["rootPages"] : $this->getContext($context, "rootPages"))) {
                echo " class=\"page-tree\"";
            }
            echo ">
        ";
            // line 17
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                if (( !$this->getAttribute($context["page"], "internal", array()) && ( !$this->getAttribute($context["page"], "parent", array()) ||  !(isset($context["rootPages"]) ? $context["rootPages"] : $this->getContext($context, "rootPages"))))) {
                    // line 18
                    echo "            <li>
                <div class=\"page-tree__item\">
                    ";
                    // line 20
                    if ($this->getAttribute($context["page"], "parent", array())) {
                        echo "<i class=\"fa fa-caret-right\"></i>";
                    }
                    // line 21
                    echo "                    <i class=\"fa page-tree__item__is-hybrid fa-";
                    if ($this->getAttribute($context["page"], "isHybrid", array())) {
                        echo "gears";
                    } else {
                        echo "code";
                    }
                    echo "\"></i>
                    <a class=\"page-tree__item__edit\" href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "url", array()), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "compose", 1 => $context["page"]), "method"), "html", null, true);
                    echo "\">compose <i class=\"fa fa-magic\"></i></a>
                    ";
                    // line 25
                    if ($this->getAttribute($context["page"], "edited", array())) {
                        echo "<span class=\"label label-warning pull-right\">edited</span>";
                    }
                    // line 26
                    echo "                </div>
                ";
                    // line 27
                    if (twig_length_filter($this->env, $this->getAttribute($context["page"], "children", array()))) {
                        // line 28
                        echo "                    ";
                        echo $this->getAttribute($this, "pages", array(0 => $this->getAttribute($context["page"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false), "method");
                        echo "
                ";
                    }
                    // line 30
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 32,  203 => 30,  197 => 28,  195 => 27,  192 => 26,  188 => 25,  184 => 24,  180 => 23,  174 => 22,  165 => 21,  161 => 20,  157 => 18,  152 => 17,  145 => 16,  132 => 15,  124 => 76,  117 => 71,  109 => 68,  103 => 64,  101 => 63,  97 => 62,  93 => 61,  90 => 60,  86 => 59,  80 => 56,  74 => 53,  69 => 50,  66 => 49,  62 => 45,  61 => 44,  60 => 43,  58 => 41,  55 => 40,  49 => 37,  44 => 36,  41 => 35,  37 => 12,  35 => 14,  11 => 12,);
    }
}
