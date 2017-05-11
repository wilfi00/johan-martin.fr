<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075dc033766a15d3db970cfed58bd57229eb92b11a97600dc6b7778e4913d76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075dc033766a15d3db970cfed58bd57229eb92b11a97600dc6b7778e4913d76e->enter($__internal_075dc033766a15d3db970cfed58bd57229eb92b11a97600dc6b7778e4913d76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d823e3fc5f10d34e32687ba2a9b561316c39baa81ad82334f05c0c8fa29b8f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d823e3fc5f10d34e32687ba2a9b561316c39baa81ad82334f05c0c8fa29b8f17->enter($__internal_d823e3fc5f10d34e32687ba2a9b561316c39baa81ad82334f05c0c8fa29b8f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075dc033766a15d3db970cfed58bd57229eb92b11a97600dc6b7778e4913d76e->leave($__internal_075dc033766a15d3db970cfed58bd57229eb92b11a97600dc6b7778e4913d76e_prof);

        
        $__internal_d823e3fc5f10d34e32687ba2a9b561316c39baa81ad82334f05c0c8fa29b8f17->leave($__internal_d823e3fc5f10d34e32687ba2a9b561316c39baa81ad82334f05c0c8fa29b8f17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c5956c4248aec7116c3b9c688b5c8b6328e15562a35c4a309caaa106eb40d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5956c4248aec7116c3b9c688b5c8b6328e15562a35c4a309caaa106eb40d7d->enter($__internal_0c5956c4248aec7116c3b9c688b5c8b6328e15562a35c4a309caaa106eb40d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_59b57958d9325b491fdf8246a6b90b6a0835f9a2d749fdab50fb35fb1aa8110c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b57958d9325b491fdf8246a6b90b6a0835f9a2d749fdab50fb35fb1aa8110c->enter($__internal_59b57958d9325b491fdf8246a6b90b6a0835f9a2d749fdab50fb35fb1aa8110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_59b57958d9325b491fdf8246a6b90b6a0835f9a2d749fdab50fb35fb1aa8110c->leave($__internal_59b57958d9325b491fdf8246a6b90b6a0835f9a2d749fdab50fb35fb1aa8110c_prof);

        
        $__internal_0c5956c4248aec7116c3b9c688b5c8b6328e15562a35c4a309caaa106eb40d7d->leave($__internal_0c5956c4248aec7116c3b9c688b5c8b6328e15562a35c4a309caaa106eb40d7d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37879d292c175f929178ca696b5d97532e3c7f7006ee854b91c6943db712ec68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37879d292c175f929178ca696b5d97532e3c7f7006ee854b91c6943db712ec68->enter($__internal_37879d292c175f929178ca696b5d97532e3c7f7006ee854b91c6943db712ec68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1c25519afbfc2f0b3f322296499f079b090615dbdb0e55bff07f9669ce83acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c25519afbfc2f0b3f322296499f079b090615dbdb0e55bff07f9669ce83acb->enter($__internal_b1c25519afbfc2f0b3f322296499f079b090615dbdb0e55bff07f9669ce83acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b1c25519afbfc2f0b3f322296499f079b090615dbdb0e55bff07f9669ce83acb->leave($__internal_b1c25519afbfc2f0b3f322296499f079b090615dbdb0e55bff07f9669ce83acb_prof);

        
        $__internal_37879d292c175f929178ca696b5d97532e3c7f7006ee854b91c6943db712ec68->leave($__internal_37879d292c175f929178ca696b5d97532e3c7f7006ee854b91c6943db712ec68_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_77a111ac46aaf26a278db30178848567180b0970078f8182781f313a3c2d3aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77a111ac46aaf26a278db30178848567180b0970078f8182781f313a3c2d3aa0->enter($__internal_77a111ac46aaf26a278db30178848567180b0970078f8182781f313a3c2d3aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a3eb8e004bcafabb803281ef55b41558b3c5991b860c39f6f34b7a0a26b4b7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3eb8e004bcafabb803281ef55b41558b3c5991b860c39f6f34b7a0a26b4b7da->enter($__internal_a3eb8e004bcafabb803281ef55b41558b3c5991b860c39f6f34b7a0a26b4b7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_a3eb8e004bcafabb803281ef55b41558b3c5991b860c39f6f34b7a0a26b4b7da->leave($__internal_a3eb8e004bcafabb803281ef55b41558b3c5991b860c39f6f34b7a0a26b4b7da_prof);

        
        $__internal_77a111ac46aaf26a278db30178848567180b0970078f8182781f313a3c2d3aa0->leave($__internal_77a111ac46aaf26a278db30178848567180b0970078f8182781f313a3c2d3aa0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/wilfi/Web/dev-johan-martin.fr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
