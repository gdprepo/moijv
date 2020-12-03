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

/* home/index.html.twig */
class __TwigTemplate_54b7c0b160aac5344d1cbafc5ac217258a2c993341a356b0890b9fb68436ed5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
    </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
    </a>
</div>

<div class=\"row\">

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item One</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Two</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Three</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Four</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Five</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Six</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

</div>
<!-- /.row -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<div id=\"carouselExampleIndicators\" class=\"carousel slide my-4\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"carousel-item active\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"First slide\">
    </div>
    <div class=\"carousel-item\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Second slide\">
    </div>
    <div class=\"carousel-item\">
        <img class=\"d-block img-fluid\" src=\"http://placehold.it/900x350\" alt=\"Third slide\">
    </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
    </a>
</div>

<div class=\"row\">

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item One</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Two</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Three</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Four</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Five</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

    <div class=\"col-lg-4 col-md-6 mb-4\">
    <div class=\"card h-100\">
        <a href=\"#\"><img class=\"card-img-top\" src=\"http://placehold.it/700x400\" alt=\"\"></a>
        <div class=\"card-body\">
        <h4 class=\"card-title\">
            <a href=\"#\">Item Six</a>
        </h4>
        <h5>\$24.99</h5>
        <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
        <div class=\"card-footer\">
        <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
        </div>
    </div>
    </div>

</div>
<!-- /.row -->
{% endblock %}
", "home/index.html.twig", "/Users/depairegabin/Documents/E-Shop/symphony/moijv/templates/home/index.html.twig");
    }
}
