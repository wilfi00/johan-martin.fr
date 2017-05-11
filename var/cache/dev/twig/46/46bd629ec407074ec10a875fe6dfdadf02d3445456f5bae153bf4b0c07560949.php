<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fecd53bdf857567e07a0a36b4a88aee05810e66ab9902ee0fcab8e8783a19dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fecd53bdf857567e07a0a36b4a88aee05810e66ab9902ee0fcab8e8783a19dd->enter($__internal_3fecd53bdf857567e07a0a36b4a88aee05810e66ab9902ee0fcab8e8783a19dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_13a5dce1895f0fe747705a18f8d7cd79af44957d288d5dca1555cfe6b3e59ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a5dce1895f0fe747705a18f8d7cd79af44957d288d5dca1555cfe6b3e59ae5->enter($__internal_13a5dce1895f0fe747705a18f8d7cd79af44957d288d5dca1555cfe6b3e59ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3fecd53bdf857567e07a0a36b4a88aee05810e66ab9902ee0fcab8e8783a19dd->leave($__internal_3fecd53bdf857567e07a0a36b4a88aee05810e66ab9902ee0fcab8e8783a19dd_prof);

        
        $__internal_13a5dce1895f0fe747705a18f8d7cd79af44957d288d5dca1555cfe6b3e59ae5->leave($__internal_13a5dce1895f0fe747705a18f8d7cd79af44957d288d5dca1555cfe6b3e59ae5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a43cc623ed4d8886d90686b7d20ddad6551b056a4d0ae7e1fbbcb97813e1851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a43cc623ed4d8886d90686b7d20ddad6551b056a4d0ae7e1fbbcb97813e1851->enter($__internal_3a43cc623ed4d8886d90686b7d20ddad6551b056a4d0ae7e1fbbcb97813e1851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a15d670d0f96b9ab767bd83aa573b91384f64113dcb4fe81ecdfadb51bdba67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a15d670d0f96b9ab767bd83aa573b91384f64113dcb4fe81ecdfadb51bdba67->enter($__internal_8a15d670d0f96b9ab767bd83aa573b91384f64113dcb4fe81ecdfadb51bdba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8a15d670d0f96b9ab767bd83aa573b91384f64113dcb4fe81ecdfadb51bdba67->leave($__internal_8a15d670d0f96b9ab767bd83aa573b91384f64113dcb4fe81ecdfadb51bdba67_prof);

        
        $__internal_3a43cc623ed4d8886d90686b7d20ddad6551b056a4d0ae7e1fbbcb97813e1851->leave($__internal_3a43cc623ed4d8886d90686b7d20ddad6551b056a4d0ae7e1fbbcb97813e1851_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a61159c9bdaecd44c99adc9b1839733b2c4481cf5858ac7a16effcea23d9351b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61159c9bdaecd44c99adc9b1839733b2c4481cf5858ac7a16effcea23d9351b->enter($__internal_a61159c9bdaecd44c99adc9b1839733b2c4481cf5858ac7a16effcea23d9351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64588fbd419df711835777ab2b091a0f34b2cf560e60488797359d74806b1e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64588fbd419df711835777ab2b091a0f34b2cf560e60488797359d74806b1e7e->enter($__internal_64588fbd419df711835777ab2b091a0f34b2cf560e60488797359d74806b1e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64588fbd419df711835777ab2b091a0f34b2cf560e60488797359d74806b1e7e->leave($__internal_64588fbd419df711835777ab2b091a0f34b2cf560e60488797359d74806b1e7e_prof);

        
        $__internal_a61159c9bdaecd44c99adc9b1839733b2c4481cf5858ac7a16effcea23d9351b->leave($__internal_a61159c9bdaecd44c99adc9b1839733b2c4481cf5858ac7a16effcea23d9351b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ee848a4aea978e07305ac86cc881b90e57d2ae8d72c6a8b915118cda517c74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee848a4aea978e07305ac86cc881b90e57d2ae8d72c6a8b915118cda517c74d->enter($__internal_1ee848a4aea978e07305ac86cc881b90e57d2ae8d72c6a8b915118cda517c74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed04b0777f877529a2510ef937f8909ba5c1cba50f33934863973364da0023fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed04b0777f877529a2510ef937f8909ba5c1cba50f33934863973364da0023fa->enter($__internal_ed04b0777f877529a2510ef937f8909ba5c1cba50f33934863973364da0023fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ed04b0777f877529a2510ef937f8909ba5c1cba50f33934863973364da0023fa->leave($__internal_ed04b0777f877529a2510ef937f8909ba5c1cba50f33934863973364da0023fa_prof);

        
        $__internal_1ee848a4aea978e07305ac86cc881b90e57d2ae8d72c6a8b915118cda517c74d->leave($__internal_1ee848a4aea978e07305ac86cc881b90e57d2ae8d72c6a8b915118cda517c74d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5ed0829d3e83c598c550013698b97325bb4d46c6410f44f759af85eaa8ae7b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ed0829d3e83c598c550013698b97325bb4d46c6410f44f759af85eaa8ae7b1->enter($__internal_a5ed0829d3e83c598c550013698b97325bb4d46c6410f44f759af85eaa8ae7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_67377b23363b4c1341e5a95ff4473601a97360803a7a0f5ffa5569662783cae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67377b23363b4c1341e5a95ff4473601a97360803a7a0f5ffa5569662783cae8->enter($__internal_67377b23363b4c1341e5a95ff4473601a97360803a7a0f5ffa5569662783cae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_67377b23363b4c1341e5a95ff4473601a97360803a7a0f5ffa5569662783cae8->leave($__internal_67377b23363b4c1341e5a95ff4473601a97360803a7a0f5ffa5569662783cae8_prof);

        
        $__internal_a5ed0829d3e83c598c550013698b97325bb4d46c6410f44f759af85eaa8ae7b1->leave($__internal_a5ed0829d3e83c598c550013698b97325bb4d46c6410f44f759af85eaa8ae7b1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/wilfi/Web/dev-johan-martin.fr/app/Resources/views/base.html.twig");
    }
}
