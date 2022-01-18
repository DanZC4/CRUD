<template>
  <div class="bg-green-600 font-bold text-gray-100">
    <div class="">
      <div class="">
        <div class="">
          <div class="">Example Component</div>

          <div class="">I'm an example component.</div>

          <div>
            <ul class="bg-blue-400">
              <li v-for="nama in names" :key="nama.key">
                  {{nama.name}}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      names: [
        { name: "rodrigo" },
        { name: "juan" },
        { name: "hugo" },
        { name: "jimena" },
      ],
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
