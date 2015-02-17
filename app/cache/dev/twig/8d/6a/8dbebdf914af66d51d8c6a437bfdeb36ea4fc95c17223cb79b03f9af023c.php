<?php

/* SonataPageBundle:PageAdmin:compose.html.twig */
class __TwigTemplate_8d6a8dbebdf914af66d51d8c6a437bfdeb36ea4fc95c17223cb79b03f9af023c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        echo "
";
    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/composer.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatapage/composer.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
";
    }

    // line 28
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed page-composer-page sonata-ba-no-side-menu\"";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <div class=\"page-composer\">
        <h2>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("page.compose_page", array(), "SonataPageBundle"), "html", null, true);
        echo " \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "name", array()), "html", null, true);
        echo "\" <small>[template: <b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "name", array()), "html", null, true);
        echo "</b>]</small></h2>

        ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["containers"]) ? $context["containers"] : $this->getContext($context, "containers"))) == 0)) {
            // line 35
            echo "
            <div class=\"alert alert-warning\">

                <strong>Warning!</strong> Before using the composer option, you need to configure the template layout.
                <br />The configuration must be done in the <code>sonata_page.templates</code> section.<br />

            <br />
            See a complete exemple here:


<pre>
sonata_page:
    # [...]
    templates:
        default:
            path: 'ApplicationSonataPageBundle::demo_layout.html.twig'
            name: 'default'
            containers:
                header:
                    name: Header
                content_top:
                    name: Top content
                content:
                    name: Main content
                content_bottom:
                    name: Bottom content
                footer:
                    name: Footer
            matrix:
                layout: |
                    HHHHHHHH
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    TTTTBBBB
                    CCCCCCCC
                    CCCCCCCC
                    FFFFFFFF

                mapping:
                    H: header
                    T: content_top
                    C: content
                    B: content_bottom
                    F: footer
</pre>
            </div>

        ";
        } else {
            // line 84
            echo "            <div class=\"row row-fluid\">
                <div class=\"col-md-4 span4\">
                    <div class=\"page-composer__page-preview\">
                        <div class=\"page-composer__page-preview__containers\">
                            ";
            // line 88
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["containers"]) ? $context["containers"] : $this->getContext($context, "containers")));
            foreach ($context['_seq'] as $context["_key"] => $context["container"]) {
                // line 89
                echo "                                ";
                if (($this->getAttribute($context["container"], "block", array(), "any", true, true) && $this->getAttribute($context["container"], "block", array()))) {
                    // line 90
                    echo "                                    <a class=\"page-composer__page-preview__container block-preview-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()), "html", null, true);
                    echo "\"
                                       data-block-id=\"";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()), "html", null, true);
                    echo "\"
                                       style=\"top:";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "y", array()), "html", null, true);
                    echo "%;right:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "right", array()), "html", null, true);
                    echo "%;bottom:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "bottom", array()), "html", null, true);
                    echo "%;left:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "x", array()), "html", null, true);
                    echo "%\"
                                       href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_compose_container_show", array("id" => $this->getAttribute($this->getAttribute($context["container"], "block", array()), "id", array()))), "html", null, true);
                    echo "\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>";
                    // line 96
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["container"], "block", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["container"], "block", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()))) : ($this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()))), "html", null, true);
                    echo "</strong><br>
                                            <small><span class=\"child-count\">";
                    // line 97
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "block", array()), "children", array())), "html", null, true);
                    echo "</span> blocks</small>
                                            <span class=\"page-composer__page-preview__add-block\">
                                                <i class=\"fa fa-circle-o\"></i>
                                                <i class=\"fa fa-dot-circle-o\"></i>
                                            </span>
                                            <span class=\"drop-indicator\">
                                                <span class=\"fa fa-download\"></span>
                                            </span>
                                        </div>
                                    </a>
                                ";
                } else {
                    // line 108
                    echo "                                    <div class=\"page-composer__page-preview__container--no-block\"
                                         style=\"top:";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "y", array()), "html", null, true);
                    echo "%;right:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "right", array()), "html", null, true);
                    echo "%;bottom:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "bottom", array()), "html", null, true);
                    echo "%;left:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["container"], "area", array()), "placement", array()), "x", array()), "html", null, true);
                    echo "%\"
                                    >
                                        <div class=\"page-composer__page-preview__container__content\">
                                            <strong>";
                    // line 112
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["container"], "area", array()), "name", array()), "html", null, true);
                    echo "</strong>
                                        </div>
                                    </div>
                                ";
                }
                // line 116
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['container'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        </div>
                    </div>

                    ";
            // line 120
            if ((twig_length_filter($this->env, (isset($context["orphanContainers"]) ? $context["orphanContainers"] : $this->getContext($context, "orphanContainers"))) > 0)) {
                // line 121
                echo "                        <div class=\"page-composer__orphan-containers\">
                            <h3 class=\"page-composer__orphan-containers__header\">";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("page.orphan_containers", array(), "SonataPageBundle"), "html", null, true);
                echo "</h3>
                            <ul>
                                ";
                // line 124
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["orphanContainers"]) ? $context["orphanContainers"] : $this->getContext($context, "orphanContainers")));
                foreach ($context['_seq'] as $context["_key"] => $context["orphanContainer"]) {
                    // line 125
                    echo "                                    <li class=\"page-composer__orphan-container block-preview-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orphanContainer"], "id", array()), "html", null, true);
                    echo "\"
                                        data-block-id=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->getAttribute($context["orphanContainer"], "id", array()), "html", null, true);
                    echo "\"
                                        href=\"";
                    // line 127
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_compose_container_show", array("id" => $this->getAttribute($context["orphanContainer"], "id", array()))), "html", null, true);
                    echo "\"
                                    >
                                        <strong>";
                    // line 129
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["orphanContainer"], "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["orphanContainer"], "name", array()), $this->getAttribute($context["orphanContainer"], "type", array()))) : ($this->getAttribute($context["orphanContainer"], "type", array()))), "html", null, true);
                    echo "</strong><br>
                                        <small><span class=\"child-count\">";
                    // line 130
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["orphanContainer"], "children", array())), "html", null, true);
                    echo "</span> blocks</small>
                                    </li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphanContainer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "                            </ul>
                        </div>
                    ";
            }
            // line 136
            echo "                </div>
                <div class=\"col-md-8 span8\">
                    <div class=\"page-composer__dyn-content\">
                    </div>
                </div>
            </div>
            <script>
                \$(document).ready(function () {
                    var composer = new PageComposer(";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()), "html", null, true);
            echo ");
                    
                    window.SonataPageComposer  = composer;
                    
                    composer.csrfTokens = ";
            // line 148
            echo twig_jsonencode_filter((isset($context["csrfTokens"]) ? $context["csrfTokens"] : $this->getContext($context, "csrfTokens")));
            echo ";
                    composer.setRoute('block_edit',            \"";
            // line 149
            echo $this->env->getExtension('routing')->getPath("admin_sonata_page_block_edit", array("id" => "BLOCK_ID"));
            echo "\");
                    composer.setRoute('block_remove',          \"";
            // line 150
            echo $this->env->getExtension('routing')->getPath("admin_sonata_page_block_delete", array("id" => "BLOCK_ID"));
            echo "\");
                    composer.setRoute('save_blocks_positions', \"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("admin_sonata_page_block_savePosition");
            echo "\");
                    composer.setRoute('block_switch_parent',   \"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("admin_sonata_page_block_switchParent");
            echo "\");
                });
            </script>
        ";
        }
        // line 156
        echo "    </div>


";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle:PageAdmin:compose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 156,  320 => 152,  316 => 151,  312 => 150,  308 => 149,  304 => 148,  297 => 144,  287 => 136,  282 => 133,  273 => 130,  269 => 129,  264 => 127,  260 => 126,  255 => 125,  251 => 124,  246 => 122,  243 => 121,  241 => 120,  236 => 117,  230 => 116,  223 => 112,  211 => 109,  208 => 108,  194 => 97,  190 => 96,  184 => 93,  174 => 92,  170 => 91,  165 => 90,  162 => 89,  158 => 88,  152 => 84,  101 => 35,  99 => 34,  90 => 32,  87 => 31,  84 => 30,  78 => 28,  72 => 25,  67 => 24,  64 => 23,  58 => 20,  53 => 19,  50 => 18,  43 => 15,  40 => 14,  11 => 12,);
    }
}
