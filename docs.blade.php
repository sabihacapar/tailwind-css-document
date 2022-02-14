<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-purple-300">
    <header class="flex justify-between text-white py-4 px-8">
        <a href="#" class="texlg font-bold">Logo</a>
    <ul class="hidden md:flex flex-row items-center align-middle gap-4">
        <li>
            <a href="#" class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded">Home</a>
        </li>
        <li> 
            <a href="#" class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded">About</a>
        </li>
        <li>
            <a href="#" class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded">Contact</a>
        </li>
    </ul>
    <button class="md:hidden">
        <svg class="" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
    </button>
              <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li class="text-gray-900 font-bold py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M13.92,8C13.44,5.16,10.97,3,8,3C4.69,3,2,5.69,2,9c0,2.97,2.16,5.44,5,5.92L7,21h2l0-6.09c0-0.98-0.71-1.8-1.67-1.97 C5.44,12.63,4,10.98,4,9c0-2.21,1.79-4,4-4c1.98,0,3.63,1.44,3.94,3.33C12.11,9.29,12.93,10,13.91,10l4.26,0l-1.59,1.59L18,13l4-4 l-4-4l-1.41,1.41L18.17,8L13.92,8z"/></g></svg>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1.95c-5.52 0-10 4.48-10 10s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57v-1.43c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57v-1.43c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>

</header>

<div class="container mx-auto mt-6">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <div class="bg-white rounded-md px-4 py-4 border-2 border-blue-900">
        <h2 class="tracking-widest text-xs mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg text-silver mb-3 text-purple-500 bg-purple-200 rounded">Tailwind CSS</h1>
        <p class="leading-relaxed text-sm mb-3">Lorem Ipsum is simply dummy
             text of the printing and typesetting industry. Lorem Ipsum has 
             been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it
               to make a type specimen book. It has survived not only five 
               centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s
                 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
             like Aldus PageMaker including versions of Lorem Ipsum.</p>
             <button class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded-m shadow-md">Click Me</button>
    </div>

    <div class="bg-white rounded-md px-4 py-4 border-2 border-blue-900">
        <h2 class="tracking-widest text-xs mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg text-silver mb-3 text-purple-500 bg-purple-200 rounded">Tailwind CSS</h1>
        <p class="leading-relaxed text-sm mb-3">Lorem Ipsum is simply dummy
             text of the printing and typesetting industry. Lorem Ipsum has 
             been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it
               to make a type specimen book. It has survived not only five 
               centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s
                 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
             like Aldus PageMaker including versions of Lorem Ipsum.</p>
             <button class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded-md">Click Me</button>
    </div>

    <div class="bg-white rounded-md px-4 py-4 border-2 border-blue-900">
        <h2 class="tracking-widest text-xs mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg text-silver mb-3 text-purple-500 bg-purple-200 rounded">Tailwind CSS</h1>
        <p class="leading-relaxed text-sm mb-3">Lorem Ipsum is simply dummy
             text of the printing and typesetting industry. Lorem Ipsum has 
             been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it
               to make a type specimen book. It has survived not only five 
               centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s
                 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
             like Aldus PageMaker including versions of Lorem Ipsum.</p>
             <button class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded-md">Click Me</button>
    </div>

    <div class="bg-white rounded-md px-4 py-4 border-2 border-blue-900">
        <h2 class="tracking-widest text-xs mb-1">CATEGORY</h2>
        <h1 class="title-font text-lg text-silver mb-3 text-purple-500 bg-purple-200 rounded">Tailwind CSS</h1>
        <p class="leading-relaxed text-sm mb-3">Lorem Ipsum is simply dummy
             text of the printing and typesetting industry. Lorem Ipsum has 
             been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it
               to make a type specimen book. It has survived not only five 
               centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s
                 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
             like Aldus PageMaker including versions of Lorem Ipsum.</p>
             <button class="bg-purple-200 text-gray-600 py-2 px-4 font-bold rounded-md">Click Me</button>
    </div>
</div>


<div class="mt-8 mb-8 grid lg:grid-cols-4 gap-10">
    <!-- card go here-->
  <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
      <img src="https://images.unsplash.com/photo-1644694554482-21ce08832b70?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwyMHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
      <div class="m-4">
          <span class="font-bold">5 Bean Chilli Stew</span>
          <span class="block text-gray-500 text-sm">Recipe By Marip</span>
      </div>
      <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
          <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

          <span>25 mins</span>
      </div>
      </div> 
      <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
          <img src="https://images.unsplash.com/photo-1644704437845-ddd169cebb13?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwzM3x8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
          <div class="m-4">
              <span class="font-bold">Nature</span>
              <span class="block text-gray-500 text-sm">Nature Nature</span>
          </div>
          <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
              <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

              <span>25 mins</span>
          </div>
          </div> 
          <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
              <img src="https://images.unsplash.com/photo-1644675530507-f4c9e214dd04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3NHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
              <div class="m-4">
                  <span class="font-bold">Nature</span>
                  <span class="block text-gray-500 text-sm">Nature</span>
              </div>
              <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                  <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

                  <span>25 mins</span>
              </div>
              </div> 
              <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                <img src="https://images.unsplash.com/photo-1644677851839-af290269c2f9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxMDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
                <div class="m-4">
                    <span class="font-bold">Nature</span>
                    <span class="block text-gray-500 text-sm">Nature</span>
                </div>
                <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                    <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>
      
                    <span>25 mins</span>
                </div>
                </div> 
</div>
</div>


<!--
    <h1 class="text-3xl md:text-6xl lg:text-9xl font-bold underline bg-gray-400">
        Hello World
    </h1>

    <h1 class="text-9xl">Heading 1</h1>
    <h1 class="text-6xl">Heading 2</h1>
    <h1 class="text-9xl">Heading 3</h1>
    <h1 class="text-9xl">Heading 4</h1>
    <h1 class="text-9xl">Heading 5</h1>
-->
    
</body>
</html>