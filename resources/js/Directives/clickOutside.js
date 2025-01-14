export default {
    beforeMount(el, binding) {
        el.__vueClickOutside__ = function(event) {
            // Verifica se o clique ocorreu fora do elemento
            if (!(el === event.target || el.contains(event.target))) {
                binding.value(event);
            }
        };

        document.addEventListener('click', el.__vueClickOutside__);
    },

    unMounted(el) {
        // Remove o listener quando o elemento for desmontado
        document.removeEventListener('click', el.__vueClickOutside__);
        delete el.__vueClickOutside__;
    },
}
