
<div class="">
    <?php 
        $back = '<a href="/classes" rel="tag" class="border-2 border-night text-night px-10 py-6 ml-10 mt-10 rounded-xl inline-block fill-night hover:bg-Amber500 hover:text-night hover:fill-night">';
        $back .= '<svg class="w-4 h-6 inline-block align-top mr-2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"/></svg>';
        $back .= 'Back to Classes';
        $back .= '</a>';
        echo $back; 
    ?>
</div>



<h1 class="text-3xl lg:text-8xl mt-24 mx-10 mb-12 w-full capitalize"><?php the_title(); ?></h1>


<div class="flex flex-col mx-10 text-2xl mb-10">

    <div class="lg:w-3/5 flex-1 flex mb-6">
        <div class="w-1/2">
            <div class="font-semibold">Date</div>
            <div class="font-thin"><?php echo gmdate("l jS M.", $meta['startUnix'][0]); ?></div>
        </div>

        <div class="w-1/2">
            <div class="font-semibold">Time</div>
            <div class="font-thin"><?php echo gmdate("H:i", $meta['startUnix'][0]) .' to '. gmdate("H:i", $meta['endUnix'][0]); ?></div>
        </div>
    </div>

    <div class="lg:w-3/5 flex-1 flex mb-6">
        <div class="w-1/2">
            <div class="font-semibold">Price</div>
            <div class="font-thin"><?php echo '£' .$meta['price'][0] ?></div>
        </div>

        <div class="w-1/2">
            <div class="font-semibold">Location</div>
            <div class="font-thin"><?php echo $meta['location'][0] ?></div>
        </div>
    </div>

    <div class="lg:w-3/5 flex-1 flex mb-6">
        <div class="w-1/2">
            <div class="font-semibold">Age</div>
            <div class="font-thin"><?php echo $meta['age'][0] ?></div>
        </div>

        <div class="w-1/2">
            <div class="font-semibold">Address</div>
            <div class="font-thin"><?php echo $meta['address'][0] ?></div>
        </div>
    </div>

</div>