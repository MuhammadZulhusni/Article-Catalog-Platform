@props(['active' => false])
<!-- Define a component property 'active' with a default value of 'false'. -->

<a 
    {{ $attributes->merge([
        // Merge additional attributes passed to the component with the default attributes.
        'class' => ($active 
            ? 'bg-gray-900 text-white' 
            : 'text-gray-300 hover:bg-gray-700 hover:text-white'
        ) . ' rounded-md px-3 py-2 text-sm font-medium'
        // Determine the class based on the 'active' state:
        // If 'active' is true, apply 'bg-gray-900' and 'text-white' for the active style.
        // If 'active' is false, apply 'text-gray-300' and add hover styles.
        // Always include the base styling 'rounded-md px-3 py-2 text-sm font-medium'.
    ]) }}
    aria-current="{{ $active ? 'page' : '' }}">
    <!-- Set 'aria-current' to 'page' if 'active' is true; otherwise, leave it empty. -->
    {{ $slot }}
    <!-- Render the content passed to the component between the <a> tags. -->
</a>
