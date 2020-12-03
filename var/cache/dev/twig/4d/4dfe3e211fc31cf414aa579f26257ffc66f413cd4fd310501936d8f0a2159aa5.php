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

/* incs/_games_list.html.twig */
class __TwigTemplate_033fb431906de760b4337cc20456d9504776504ae6b19aee45b5dd66fbbf2cd4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incs/_games_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "incs/_games_list.html.twig"));

        // line 1
        echo "<div class=\"row\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
            // line 3
            echo "    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_details", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            echo "\"><img class=\"card-img-top\" src=\"";
            ((twig_get_attribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 5)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "image", [], "any", false, false, false, 5), "html", null, true))) : (print ("http://placehold.it/700x400")));
            echo " \" alt=\"\"></a>
            <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game_details", ["id" => twig_get_attribute($this->env, $this->source, $context["game"], "id", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</a>
            </h4>
            <h5>\$24.99</h5>
            <p class=\"card-text\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
            </div>
            <div class=\"card-footer\">
            <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</div>

<div class=\"navigation\">
    ";
        // line 23
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 23, $this->source); })()));
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "incs/_games_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  84 => 19,  70 => 11,  62 => 8,  54 => 5,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    {% for game in games %}
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card h-100\">
            <a href=\"{{ path('game_details', { id: game.id}) }}\"><img class=\"card-img-top\" src=\"{{ game.image ? game.image : 'http://placehold.it/700x400' }} \" alt=\"\"></a>
            <div class=\"card-body\">
            <h4 class=\"card-title\">
                <a href=\"{{ path('game_details', { id: game.id}) }}\">{{ game.name }}</a>
            </h4>
            <h5>\$24.99</h5>
            <p class=\"card-text\">{{ game.description }}</p>
            </div>
            <div class=\"card-footer\">
            <small class=\"text-muted\">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>
    {% endfor %}

</div>

<div class=\"navigation\">
    {{ knp_pagination_render(games) }}
</div>", "incs/_games_list.html.twig", "/Users/depairegabin/Documents/E-Shop/symphony/moijv/templates/incs/_games_list.html.twig");
    }
}
