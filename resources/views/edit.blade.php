<p class="">{{Auth::user()->name}}</p>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{route("update", $event->id)}}" method="post"> 
        @csrf   
        <section class="text-blueGray-700 ">
            <div class="container items-center px-5 py-12 lg:px-20">
            <div class="flex flex-col w-full p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-2/6 md:w-1/2 md:mt-0">
                <div class="relative ">
                <label for="title" class="text-base leading-7 text-blueGray-500">Title</label>
                <input type="name" name="title" value="{{$event->title}}" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                <label for="description" class="text-base leading-7 text-blueGray-500">Description</label>
                <input type="text" name="description" value="{{$event->description}}" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                <label for="full_description" class="text-base leading-7 text-blueGray-500">Full Description</label>
                <input type="text" name="full_description" value="{{$event->full_description}}" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                <label for="image" class="text-base leading-7 text-blueGray-500">Image</label>
                <input type="text" id="image" name="image" value="{{$event->image}}" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                </div>
                <div class="relative mt-4">
                    <label for="date" class="text-base leading-7 text-blueGray-500">Date</label>
                    <input type="date" name="date" value="{{$event->date}}" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform border-transparent rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                    </div>
                <div class="flex my-6">
                <label class="flex items-center">
                    <input type="checkbox" class="form-checkbox ">
                    <span class="ml-2 text-blueGray-500">Subscribe me </span>
                </label>
                </div>
                <div class="inline-flex flex-wrap items-center justify-between ">
                <button type="submit" class="w-full px-4 py-2 my-2 font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 border-blueGray-100 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-200 hover:text-blue-900"> Edit </button>
            </div>
        </section>
    </form>

</body>
</html>
