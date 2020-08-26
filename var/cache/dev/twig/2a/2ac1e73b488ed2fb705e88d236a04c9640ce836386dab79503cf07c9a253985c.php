<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/navbar.html.twig */
class __TwigTemplate_904afe58dbff4f56235b0bdf9113208fc3954132f5c9cec7defa129f5c92c6a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/navbar.html.twig"));

        // line 1
        echo "    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area \">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-3 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"img/logo.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-7\">
                            <div class=\"main-menu   d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navbar"]) || array_key_exists("navbar", $context) ? $context["navbar"] : (function () { throw new RuntimeError('Variable "navbar" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                                            <li><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 19), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo " <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    <li><a href=\"blog.html\">blog</a></li>
                                                    <li><a href=\"single-blog.html\">single-blog</a></li>
                                                </ul>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                            <div class=\"search_icon\">
                                <a href=\"#\">
                                    <i class=\"ti-search\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  66 => 19,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area \">
                <div class=\"container\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-3 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"img/logo.png\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-7\">
                            <div class=\"main-menu   d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        {% for item in navbar %}
                                            <li><a href=\"{{ item.link }}\">{{ item.title }} <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    <li><a href=\"blog.html\">blog</a></li>
                                                    <li><a href=\"single-blog.html\">single-blog</a></li>
                                                </ul>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                            <div class=\"search_icon\">
                                <a href=\"#\">
                                    <i class=\"ti-search\"></i>
                                </a>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

", "base/navbar.html.twig", "/home/mohamed/Desktop/training/Laravel/Julie/cooking-recipes/templates/base/navbar.html.twig");
    }
}
