<?php

/* AheGsbBundle:Visiteurs:saisieFraisHorsForfait.html.twig */
class __TwigTemplate_4ce7fd105a87a546077cfdc24b328e31857cfb96a138ea41b57fd18efb1204e0 extends Twig_Template
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
        echo "   ";
        $this->displayBlock('bloc1', $context, $blocks);
        // line 30
        echo "      
            <div class=\"corpsForm\">  
                <form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("gsb_saisie_fraishf");
        echo "\" method=\"POST\">
                <fieldset>
                    <legend>Nouveau frais Hors Forfait</legend>
                        <p style='text-align:center;'>
                             <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"libelle\"> 
                                Libellé :
                            </label>
                              <input type=\"text\" id=\"libelle\" 
                                   name=\"libelle\" 
                                   
                                   value=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["libelle"]) ? $context["libelle"] : $this->getContext($context, "libelle")), "html", null, true);
        echo "\" >
                              <br>
                            <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"date\"> 
                                Date :
                            </label>
                             <input type=\"date\" id=\"date\" 
                                   name='date' 
                                   
                                   value=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), "Y-m-d"), "html", null, true);
        echo "\" >
                             <br>
                             
                               <label class=\"col-md-offset-1 col-lg-3\" 
                                   for=\"montant\"> 
                                Montant :
                            </label>
                            <input type=\"text\" id=\"montant\" 
                                   name=\"montant\" 
                                  
                                   value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["montant"]) ? $context["montant"] : $this->getContext($context, "montant")), "html", null, true);
        echo "\" >
                        </p>
                    <hr>
                    <input class =\"btn-success\" type=\"submit\" value=\"Valider\" 
                           name=\"valider\">
                </fieldset>
                </form>
                    <br>
       
        <a href = \"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("gsb_homepage_visiteurs");
        echo "\"> 
            Accueil Visiteurs
        </a>
           
               
            </div>    
        

        <a href=\"/\">  </a>
    </div>
";
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
    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "AheGsbBundle:Visiteurs:saisieFraisHorsForfait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 19,  120 => 11,  116 => 10,  108 => 4,  105 => 3,  90 => 71,  78 => 62,  65 => 52,  53 => 43,  39 => 32,  35 => 30,  32 => 3,  29 => 2,);
    }
}
