<?php

/* AheGsbBundle:Comptable:fraisVisComptable.html.twig */
class __TwigTemplate_baaf01208a5ca94d0e2a1a6f740f4f5359355e51fbb91fe19165b462dcfb287e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_messages($context, array $blocks = array())
    {
        // line 3
        echo "    <div>
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 5
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <br>
    
        <div >
           
            <h2> Gestion des Fiches de Frais Comptable</h2>
            
            <hr>
            <h3> Frais d'un Visiteur </h3>
                <table >
                <thead>
                    <th>
                        ID
                    </th>
                    <th>
                        Mois
                    </th>
                    <th>
                        Quantité
                    </th>
                </thead>
                    <tbody>
                        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeFraisVis"]) ? $context["listeFraisVis"] : $this->getContext($context, "listeFraisVis")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["frais"]) {
            // line 32
            echo "                        <tr>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")), "idFraisForfait", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")), "mois", array(), "array"), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frais"]) ? $context["frais"] : $this->getContext($context, "frais")), "quantite", array(), "array"), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                           
                        La liste est vide
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['frais'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                    </tbody>
                </table>
        </div>
    

";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Comptable:fraisVisComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  103 => 38,  95 => 35,  91 => 34,  87 => 33,  84 => 32,  79 => 31,  56 => 10,  53 => 9,  48 => 7,  39 => 5,  35 => 4,  32 => 3,  29 => 2,);
    }
}
