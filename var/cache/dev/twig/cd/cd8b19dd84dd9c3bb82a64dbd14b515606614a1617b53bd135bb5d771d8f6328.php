<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9273c472cb92535a7660a6b3d6a331db5fe03a219c605b239ff73ba59e2ad8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9273c472cb92535a7660a6b3d6a331db5fe03a219c605b239ff73ba59e2ad8e5->enter($__internal_9273c472cb92535a7660a6b3d6a331db5fe03a219c605b239ff73ba59e2ad8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a2fc74eee33a1d4bbc7bfbadf1092d3ea78e1b0fc50f3a185ba909e844f6e0e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fc74eee33a1d4bbc7bfbadf1092d3ea78e1b0fc50f3a185ba909e844f6e0e6->enter($__internal_a2fc74eee33a1d4bbc7bfbadf1092d3ea78e1b0fc50f3a185ba909e844f6e0e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9273c472cb92535a7660a6b3d6a331db5fe03a219c605b239ff73ba59e2ad8e5->leave($__internal_9273c472cb92535a7660a6b3d6a331db5fe03a219c605b239ff73ba59e2ad8e5_prof);

        
        $__internal_a2fc74eee33a1d4bbc7bfbadf1092d3ea78e1b0fc50f3a185ba909e844f6e0e6->leave($__internal_a2fc74eee33a1d4bbc7bfbadf1092d3ea78e1b0fc50f3a185ba909e844f6e0e6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d85b217fc2d40dcbcb666c4976724cd8ab7b0664c821ba9aaf30bfedf0d9207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d85b217fc2d40dcbcb666c4976724cd8ab7b0664c821ba9aaf30bfedf0d9207->enter($__internal_2d85b217fc2d40dcbcb666c4976724cd8ab7b0664c821ba9aaf30bfedf0d9207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b5e3349d17219b8a9d2b7e8f8d855db7803a547219f6e1d60ecdd7216c9cd988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e3349d17219b8a9d2b7e8f8d855db7803a547219f6e1d60ecdd7216c9cd988->enter($__internal_b5e3349d17219b8a9d2b7e8f8d855db7803a547219f6e1d60ecdd7216c9cd988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5e3349d17219b8a9d2b7e8f8d855db7803a547219f6e1d60ecdd7216c9cd988->leave($__internal_b5e3349d17219b8a9d2b7e8f8d855db7803a547219f6e1d60ecdd7216c9cd988_prof);

        
        $__internal_2d85b217fc2d40dcbcb666c4976724cd8ab7b0664c821ba9aaf30bfedf0d9207->leave($__internal_2d85b217fc2d40dcbcb666c4976724cd8ab7b0664c821ba9aaf30bfedf0d9207_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f3b3149510c319d3e0d9ce85abfb576c15cf31ea080d3bc78bf7be72d4fac2be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b3149510c319d3e0d9ce85abfb576c15cf31ea080d3bc78bf7be72d4fac2be->enter($__internal_f3b3149510c319d3e0d9ce85abfb576c15cf31ea080d3bc78bf7be72d4fac2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e5b4323685860ac8cb9dae11ac5c9a18bda85c461463d8f4b6f7c8807d3f6b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b4323685860ac8cb9dae11ac5c9a18bda85c461463d8f4b6f7c8807d3f6b75->enter($__internal_e5b4323685860ac8cb9dae11ac5c9a18bda85c461463d8f4b6f7c8807d3f6b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e5b4323685860ac8cb9dae11ac5c9a18bda85c461463d8f4b6f7c8807d3f6b75->leave($__internal_e5b4323685860ac8cb9dae11ac5c9a18bda85c461463d8f4b6f7c8807d3f6b75_prof);

        
        $__internal_f3b3149510c319d3e0d9ce85abfb576c15cf31ea080d3bc78bf7be72d4fac2be->leave($__internal_f3b3149510c319d3e0d9ce85abfb576c15cf31ea080d3bc78bf7be72d4fac2be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bd0875e837ae89cff2be80aec161f8f5c693bec4f599bf06d081659d6fe23964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0875e837ae89cff2be80aec161f8f5c693bec4f599bf06d081659d6fe23964->enter($__internal_bd0875e837ae89cff2be80aec161f8f5c693bec4f599bf06d081659d6fe23964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_256625dc89fa5647b0f14670e69969268bfa5f8dc1fef70cb43ab7adf9ef8fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256625dc89fa5647b0f14670e69969268bfa5f8dc1fef70cb43ab7adf9ef8fa4->enter($__internal_256625dc89fa5647b0f14670e69969268bfa5f8dc1fef70cb43ab7adf9ef8fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_256625dc89fa5647b0f14670e69969268bfa5f8dc1fef70cb43ab7adf9ef8fa4->leave($__internal_256625dc89fa5647b0f14670e69969268bfa5f8dc1fef70cb43ab7adf9ef8fa4_prof);

        
        $__internal_bd0875e837ae89cff2be80aec161f8f5c693bec4f599bf06d081659d6fe23964->leave($__internal_bd0875e837ae89cff2be80aec161f8f5c693bec4f599bf06d081659d6fe23964_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/wilfi/Web/dev-johan-martin.fr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
