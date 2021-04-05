<script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "Event",
    "eventStatus": "https://schema.org/EventScheduled",
    "startDate": "<?php echo gmdate("Y-m-d\TH:i", $meta['startUnix'][0]); ?>",
    "endDate": "<?php echo gmdate("Y-m-d\TH:i", $meta['endUnix'][0]); ?>",
    "description": "<?php echo addslashes(strip_tags($meta['raw_content'][0])); ?>",
    "image": "<?php echo $image; ?>",
    "name": "<?php echo $post->post_title; ?>",
    "url": "<?php echo $post->guid; ?>",
    "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
    "typicalAgeRange": "<?php echo $meta['age'][0]; ?>",
    "location":
    {
        "@type": "Place",
        "name": "<?php echo $meta['location'][0]; ?>",
        "address": "<?php echo $meta['address'][0]; ?>"
    },
    "offers":
    {
        "url": "https://londonparkour.com/classes/",
        "price": "<?php echo $meta['price'][0]; ?>",
        "priceCurrency": "£",
        "availability": "https://schema.org/InStock",
        "validFrom": "<?php echo date('Y-m-d');?>"
    },
    "organizer": 
    {
        "@type": "Organization",
        "name": "LondonParkour",
        "url": "https://londonparkour.com"
    },
    "performer": 
    {
        "@type": "Organization",
        "name": "LondonParkour",
        "url": "https://londonparkour.com"
    }
}
</script>