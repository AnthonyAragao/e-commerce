import { useDark, useToggle } from "@vueuse/core";
import { ref, watchEffect } from "vue";

export function useDarkMode() {
    const isDarkMode = useDark({
        storageKey: "dark-mode",
        valueDark: "dark",
        valueLight: "light",
    });

    const toggleDarkMode = useToggle(isDarkMode);
    const isDarkModeRef = ref(isDarkMode.value);

    watchEffect(() => {
        isDarkModeRef.value = isDarkMode.value;
    });

    return {
        isDarkMode,
        toggleDarkMode,
        isDarkModeRef,
    };
}
