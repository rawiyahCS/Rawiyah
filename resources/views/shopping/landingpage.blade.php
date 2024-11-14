@extends('layouts.main')

@section('content')
<section class="px-2 py-32 bg-white md:px-0">
      <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="flex flex-wrap items-center sm:-mx-3">
          <div class="w-full md:w-1/2 md:px-3">
            <div class="w-full pb-6 space-y-4 sm:max-w-md lg:max-w-lg lg:space-y-4 lg:pr-0 md:pb-0">
              <!-- <h1
              class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl"
            > -->
              <h3 class="text-xl">قصتنا
              </h3>
              <h2 class="text-4xl text-green-600">مرحبا</h2>
              <!-- </h1> -->
              <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">
                                          
                            أهلاً وسهلاً بكم في مطعم الرفاهية، الوجهة المثالية للاستمتاع بتجربة طعام فريدة ومميزة. نحن هنا لنقدم لكم أشهى الأطباق المُعدة بأفضل المكونات وأعلى مستويات الجودة.
                            هدفنا هو توفير تجربة طعام لا تُنسى تجمع بين النكهات المميزة والخدمة الممتازة.
                            نعدكم برحلة مليئة بالرفاهية والتميز!

              </p>
              <div class="relative flex">
                <a href="#_"
                  class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-green-600 rounded-md sm:mb-0 hover:bg-green-700 sm:w-auto">
                  اقرأ المزيد

                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/2">
            <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl">
              <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2c/8a/c3/e7/communal-table.jpg?w=800&h=600&s=1"/>
            </div>
          </div>
        </div>
      </div>
</section>
    <section class="py-20 bg-gray-50">
      <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
        <div class="flex flex-wrap items-center -mx-3">
          <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
            <div class="w-full lg:max-w-md">
              <h2 class="mb-4 text-2xl font-bold">من نحن؟</h2>
              <h2
                class="mb-4 text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
                لماذا تختارنا؟
                </h2>

              <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">
              نحن نقدم خدمات متميزة تُلبي جميع احتياجاتك بكفاءة واحترافية. هدفنا هو تقديم تجربة فريدة تجمع بين السرعة والجودة والأمان لضمان رضاك التام</p>
              <ul>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500"> سرعة في المعالجة والتوصيل</span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="font-medium text-gray-500"> خيارات دفع سهلة وآمنة
                  </span>
                </li>
                <li class="flex items-center py-2 space-x-4 xl:py-3">
                  <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                  <span class="font-medium text-gray-500">حماية وأمان بنسبة 100٪
                  </span>
                </li>
              </ul>
            </div>
          </div>
          <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
              class="mx-auto sm:max-w-sm lg:max-w-full"
              src="https://cdn.pixabay.com/photo/2020/12/31/12/28/cook-5876388_960_720.png" alt="feature image"></div>
        </div>
      </div>
    </section>
    
    <section class="mt-8 bg-white">
       <div class="mt-4 text-center">
        <h3 class="text-2xl font-bold">قائمتنا</h3>
        <h2 class="text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500">
          اختيار اليوم</h2>
        </div>
      
        <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2014/11/05/15/57/salmon-518032_960_720.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">سي فود</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">سلمون مشوي 1 سي فود</h4>
              <p class="leading-normal text-gray-700">استمتع بوجبة السلمون المشوي الطازجة المحضرة بعناية، مع نكهة غنية وتوابل مميزة. يقدم مع سلطة صحية وأعشاب طازجة، ليمنحك تجربة طعام لا تُنسى. خيار مثالي لعشاق المأكولات البحرية!</p>
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
              <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>
              <span class="text-xl text-green-600"></span>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://www.sargento.com/assets/Uploads/Recipe/Image/VeggiePizza-v2__FillWzExNzAsNTgzXQ.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-cyan-500 rounded-full text-pink-50">بيتزا 
                </span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">بيتزا الخضار
              </h4>
              <p class="leading-normal text-gray-700">عجينة رقيقة مغطاة بالفلفل الحلو الطازج، الزيتون، البصل، وجبنة الموزاريلا. خيار صحي ولذيذ لعشاق البيتزا.
              </p>
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
            <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>            
              <span class="text-xl text-green-600"></span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://pforpizza.in/wp-content/uploads/2024/01/big-burger-stuffed-with-chicken-meat-salad-wooden-board-min-scaled.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">برغر
                </span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">برغر كلاسيك
              </h4>
              <p class="leading-normal text-gray-700">برغر مشوي بعناية مع لحم بقري طازج، مغطى بشرائح الجبن الذائبة، يقدم في خبز طري مع الخس المقرمش، الطماطم الطازجة، والبصل. يُضاف إليه صلصة البرغر الخاصة لإكمال النكهة. خيار مثالي لعشاق البرغر الكلاسيكي!
              </p>
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
            <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>              <span class="text-xl text-green-600"></span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjdULafAGBMKCSX7i7vhwa5ySL1MWzVAyBkQ&s"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-pink-500 rounded-full text-pink-50">شاي</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase"> شاي طازج</h4>
              <p class="leading-normal text-gray-700">استمتع بالشاي الطازج المحضر بعناية فائقة ليمنحك نكهة أصيلة ولحظات من الاسترخاء. مثالي لعشاق الشاي الذين يبحثون عن الجودة والطعم المميز.
              </p>
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
              <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>
              <span class="text-xl text-green-600"></span>
            </div>
          </div>
          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_960_720.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-red-500 rounded-full text-red-50">سي فود</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">سمك السلمون 3 - مأكولات بحرية
              </h4>
              <p class="leading-normal text-gray-700">استمتع بوجبة السلمون المشوي الطازجة المحضرة بعناية، مع نكهة غنية وتوابل مميزة. يقدم مع سلطة صحية وأعشاب طازجة، ليمنحك تجربة طعام لا تُنسى. خيار مثالي لعشاق المأكولات البحرية!
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
            <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>              <span class="text-xl text-green-600"></span>
            </div>
          </div>

          <div class="max-w-xs mx-4 mb-2 rounded-lg shadow-lg">
            <img class="w-full h-48" src="https://www.cookingclassy.com/wp-content/uploads/2022/07/grilled-steak-15.jpg"
              alt="Image" />
            <div class="px-6 py-4">
              <div class="flex mb-2">
                <span class="px-4 py-0.5 text-sm bg-orange-800 rounded-full text-pink-50">ستيك</span>
              </div>
              <h4 class="mb-3 text-xl font-semibold tracking-tight text-green-600 uppercase">طبق الستيك المشوي
              </h4>
              <p class="leading-normal text-gray-700">شريحة لحم طرية وعصرية مشوية بعناية، تُقدم مع بطاطس مهروسة وخضروات مشوحة على النار.
              </p>
            </div>
            <div class="flex items-center justify-between p-4">
            <a href="{{route('menu')}}">
            <button class="px-4 py-2 bg-green-600 text-green-50">اضغط هنا</button></a>     
                     <span class="text-xl text-green-600"></span>
            </div>
          </div>

        </div>
      </div>
                    
                            
     </section>                        
             


 @endsection 