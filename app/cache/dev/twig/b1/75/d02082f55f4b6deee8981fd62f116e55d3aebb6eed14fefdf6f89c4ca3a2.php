<?php

/* AheGsbBundle:Visiteurs:saisieFicheFrais.html.twig */
class __TwigTemplate_b175d02082f55f4b6deee8981fd62f116e55d3aebb6eed14fefdf6f89c4ca3a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AheGsbBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayBlock('bloc1', $context, $blocks);
    }

    public function block_bloc1($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->env->loadTemplate("AheGsbBundle:Visiteurs:erreurs.html.twig")->display(array_merge($context, array("lesErreurs" => (isset($context["lesErreursForfait"]) ? $context["lesErreursForfait"] : $this->getContext($context, "lesErreursForfait")))));
        // line 5
        echo "
        <h2> Fiche de frais du mois ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["numMois"]) ? $context["numMois"] : $this->getContext($context, "numMois")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["numAnnee"]) ? $context["numAnnee"] : $this->getContext($context, "numAnnee")), "html", null, true);
        echo "</h2>
      
            <div class=\"corpsForm\">  
                  
                <fieldset>
                    <legend>Frais hors forfait : </legend>
                    <table border='1' style='width: 50%;text-align: center'>
                        <tr>
                            <th>date </th>
                            <th> Libéllé</th>
                            <th>Montant</th>
                            <th>Action</th>
                        </tr>


                        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fhf"]) ? $context["fhf"] : $this->getContext($context, "fhf")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                            <tr>
                                <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "date", array(), "array"), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "libelle", array(), "array"), "html", null, true);
            echo "</td>
                                <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "montant", array(), "array"), "html", null, true);
            echo "</td>
                                <td> 
                                    <table border=\"1\" style='width: 100%;text-align: center;'> 
                                        <tr>
                                            <td>
                                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_visiteurs_mod_FhF", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array(), "array"))), "html", null, true);
            echo "\" accesskey=\"\"title=\"Déconnexion\">Modifier</a>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gsb_visiteurs_sup_FhF", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id", array(), "array"))), "html", null, true);
            echo "\" onClick=\"return confirm('Voulez-vous vraiment supprimer ce frais ?  ');\" accesskey=\"\" title=\"Suppression\">Supprimer </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            <tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "                                <tr><td colspan=\"4\" style='text-align:center;font:18px Arial bold;'>Vous n'avez pas de frais hors forfait </td></tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </table>
                    <hr>
                    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </fieldset>
                  <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href = \"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("gsb_homepage_visiteurs");
        echo "\"> 
            Accueil Visiteurs
        </a>
               
            </div>    
        

        <a href=\"/\">  </a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:saisieFicheFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 48,  118 => 44,  114 => 42,  107 => 40,  95 => 33,  89 => 30,  81 => 25,  77 => 24,  73 => 23,  70 => 22,  65 => 21,  45 => 6,  42 => 5,  39 => 4,  32 => 3,  29 => 2,);
    }
}
