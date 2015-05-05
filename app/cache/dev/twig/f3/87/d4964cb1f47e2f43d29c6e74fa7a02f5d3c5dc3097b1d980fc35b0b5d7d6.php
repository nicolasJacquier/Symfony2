<?php

/* AheGsbBundle:Visiteurs:layoutVisiteurs.html.twig */
class __TwigTemplate_f387d4964cb1f47e2f43d29c6e74fa7a02f5d3c5dc3097b1d980fc35b0b5d7d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'bloc1' => array($this, 'block_bloc1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AheGsbBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "<br>
<div class=\"col-md-3\">
    <fieldset class=\"accueil\">
        <table>
            <tr>
                <td>
                    <h2> Bienvenue ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " 
                       ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "
                    </h2> 
                </td>
                <td>
                    <h2> Gestion des Fiches de Frais </h2>
                </td>
                <td>
                    <h3>
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("gsb_visiteurs_deconnexion");
        echo "\" 
                        accesskey=\"\"title=\"Déconnexion\">
                        Se déconnecter
                    </a> 
                    </h3>
                </td>
            </tr>
        </table>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:layoutVisiteurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 11,  100 => 56,  70 => 44,  34 => 30,  81 => 35,  53 => 39,  23 => 1,  127 => 51,  104 => 38,  97 => 33,  84 => 24,  77 => 46,  65 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 19,  119 => 42,  102 => 31,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 32,  93 => 52,  88 => 27,  78 => 31,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 63,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 32,  91 => 28,  62 => 19,  49 => 38,  87 => 25,  44 => 12,  21 => 2,  94 => 28,  89 => 20,  85 => 25,  75 => 29,  68 => 14,  56 => 40,  27 => 4,  25 => 3,  28 => 3,  24 => 4,  31 => 4,  46 => 6,  26 => 6,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 10,  115 => 33,  111 => 37,  108 => 34,  101 => 32,  98 => 30,  96 => 31,  83 => 25,  74 => 45,  66 => 24,  55 => 8,  52 => 21,  50 => 10,  43 => 11,  41 => 9,  35 => 9,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 4,  109 => 3,  106 => 36,  103 => 32,  99 => 31,  95 => 29,  92 => 21,  86 => 47,  82 => 22,  80 => 41,  73 => 27,  64 => 17,  60 => 6,  57 => 11,  54 => 19,  51 => 14,  48 => 13,  45 => 17,  42 => 5,  39 => 10,  36 => 5,  33 => 4,  30 => 7,);
    }
}
