<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //       //id , Animal , Name , status 
        // Product Category List : id: 123456 
            //Dog
        //     [1,1,'Food',1], 
        //     [2,1,'Clothes and Accessories ',1], 
        //     [3,1,'Toy',1],
           
        //  //Cat
        //     [4,2,'Food',1],
        //     [5,2,'Cat Litter',1],
        //     [6,2,'Cat Furniture And Scratchers',1],
       // 'pro_cat_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img',
      //Supplier List : id: 12345
    //    [1,'Rachael Ray Nutrish','012345678'],
    //    [2,'Hill s Science Diet Dry Cat Food','012345678'],
    //    [3,'Blue Buffalo ','012345678'],
    //    [4,'Nutro MAX  ','012345678'],
  // 'id' 'pro_cat_id', 'supplier_id', 'name', 'description', 'price','stock' ,'img',
       $products = [ 
    
        
   //dogfood   Name                                                 Description                                                             Price   Stock  Img     
   [1,1,1,'DOG ADULT - LAMB & FISH, SENSITIVE SKIN & COAT 15kg','1st Choice Sensitive Skin & Coat (Lamb & Fish) is specially formulated for adult dogs of all breeds that are prone to skin sensitivities.',2000000,30,'dogfood1.jpg'],
   [2,1,1,'HOLISTIC DOG ADULT SALMON & RICE 13.6kg','The Salmon and Brown Rice formula features fresh salmon as the main ingredient, providing an optimal blend of Omega-3 and 6 fatty acids for healthy skin and coat.',2100000,25,'dogfood2.jpg'],
   [3,1,1,'FINEST SALMON COMPLETE (SMALL BITE) 1.5kg','Fish4Dogs Finest Salmon provides your dog with the perfect protein from the sea, rich in Omega-3 and highly digestible. It is made with high quality ingredients that are grain-free with no artificial ingredients.',520000,30,'dogfood3.jpg'],
   [4,1,1,'LIMITED INGREDIENT DIET - LAMB (ALKALINE) 10kg','This is the most nutritious food your dog will ever need with beneficial nutrients to maintain beautiful skin and coat while improving overall health.',2500000,30,'dogfood4.jpg'],
   [5,1,1,'CANINE ADULT 15kg','Adult Chicken is designed to fuel the energy needs of dogs during their prime. It features delicious chicken flavor that also promotes lean muscles.',2100000,30,'dogfood5.jpg'],
   [6,1,1,'CANINE ADULT LAMB & RICE SMALL BREED 12kg','Adult Lamb & Rice Small Breed is designed to fuel the energy needs of dogs during their prime. It features delicious lamb flavor that also promotes lean muscles.',1750000,30,'dogfood6.jpg'],
   [7,1,1,'LAMB FREEZE DRIED 3.6kg','The freeze-dried lamb feast features delicious grass-fed lamb and does not contain any artificial coloring, flavoring or preservatives.',2950000,30,'dogfood7.jpg'],
   [8,1,1,'ORIGINAL LAMB FOR LARGE BREED PUPPY & ADULT 26lbs',' It features high quality lamb and pork protein to build lean muscles, and fibers from fresh produce to support overall health.',2130000,30,'dogfood8.jpg'],
   [9,1,1,'FREEZE DRIED - LAMB DINNER 425g','Kiwi Kitchens Raw Freeze Dried is a complete and balanced whole food diet made from high quality 100% meat, fish and produce, complemented with vitamins and minerals. ',650000,30,'dogfood9.jpg'],
 
   //Dog Cloth 
   [10,2,2,'WATERPROOF BOOTS (LARGE) (PURPLE)','Pawz Dog Boots (Large) is the most natural-feeling boot your dog can wear because the material is so thin your dog feels the ground. Protects against snow, ice, heat and chemicals.',50000,30,'dogclothes1.jpg'],
   [11,2,2,'T-SHIRT - PIZZA','DARK BLUE | LARGE | 35cm',280000,30,'dogclothes2.jpg'],
   [12,2,2,'SWEAT SHIRT','STRIPE WITH ICE CREAM GREY | MEDIUM | 30cm',280000,30,'dogclothes3.jpg'],
   [13,2,2,'SWEAT SHIRT WHALE','STRIPE WITH WHALE BLUE | MEDIUM | 30cm',280000,30,'dogclothes4.jpg'],
   [14,2,2,'SWEAT SHIRT PENGUIN','PINK WITH PENGUIN | MEDIUM | 30cm',210000,30,'dogclothes5.jpg'],
   [15,2,2,'SWEAT SHIRT PIRATE',' PENGUIN PINK | MEDIUM | 30cm',210000,30,'dogclothes6.jpg'],
   [16,2,2,'PU SHOE LARGE (ASSORTED)','These shoes adapt environmental friendly resin, on-step hot compression forming solid and durable-easy to wear, convenient and soft',290000,30,'dogclothes7.jpg'],
   [17,2,2,'BANDANA EXTRA','Carefully and passionately tailored for your marvelous pets. This Bandana comes in different designs and tantalizing colours.',190000,30,'dogclothes8.jpg'],
   [18,2,2,'WATERPROOF PET SOCKS HIPPO ','Waterproof, the sole of stocking parts adopts composite plastic, have waterproof functions.',380000,30,'dogclothes9.jpg'],
   [19,2,2,'STANDALONE BOWTIE','Stand-alone bowtie, highly decorated and fashionable every pet deserves.',145000,30,'dogclothes10.jpg'],
   
  //Dog Toy  10
  [20,3,3,'TRIPLE RINGS - ROPE & 2 NYLON (BLUE)','Fantastic dental chew toy with multiple texture, great for massaging gums and helping remove tartar. Dogs can chew, toss and fetch. Created into a triple rings, rope and 2 nylons.',125000,30,'dogtoy1.jpg'],
  [21,3,3,'TOPPL TREAT DISPENSING TOY (GREEN) (10cm)','This treat-minded toy features a bowl-like shape which features rubber prongs that hold treats in place on the interior of the toy. The toy is also made from the non-toxic material Zogoflex that is dishwasher safe for easy cleaning.',395000,30,'dogtoy2.jpg'],
  [22,3,3,'PUPPY KONG (SMALL)','The KONG Puppy toy is the original toy that started the KONG Puppy product line made with our exclusive teething rubber formula.',200000,30,'dogtoy3.jpg'],
  [23,3,3,'SQUEAKAIR TENNIS BALLS (2pcs) (LARGE)','High quality squeaker tennis ball is covered in non abrasive tennis ball material that will not wear down dog teeth. ',320000,30,'dogtoy4.jpg'],
  [24,3,3,'PUPPY TEETHING PACIFIER - EXTRA SMALL','Bristles raised during chewing will help clean teeth and prevent tartar build up. Designed for teething puppies. Not recommended for adult dogs or puppies with any permanent teeth.',195000,30,'dogtoy5.jpg'],
  [25,3,3,'FLEXIBLE DENTAL CHEW - WOLF','Perfect for small dogs and includes a chew toy made of softer, flexible material for moderate chewers, a dental chew toy with multi textured design provides both dental stimulation and helps satisfy a dog natural urge to chew while reducing tartar and massaging gums, and an edible chew.',325000,30,'dogtoy6.jpg'],
  [26,3,3,'BELLY FLOPS - STARFISH','The soft yet strong material ensures for long-lasting play with a squeaker for added excitement and floating ability for water fun.',360000,30,'dogtoy7.jpg'],
  [27,3,3,'LIKER 7 BALL','Perfect for dog jaws - soft for dog teeth and gums',110000,30,'dogtoy8.jpg'],
  [28,3,3,'TEXTILE DOG TOY CHICKO','A beeztees textile dog toy called chiko. A wonderful companion to cuddle and play. This funny toy comes with a beep that would surely become one of your pet favorites.',280000,30,'dogtoy9.jpg'],
  [29,3,3,'BACK TO NATURE SPIDER BALL (SMALL)','Innovative design by Chomper. A perfect companion dog toy for entertainment, and other modes of play.',130000,30,'dogtoy10.jpg'],
  //Cat Food
  [30,4,4,'TIN TUNA FILLET (CATS) 156g','Each tin contains limited ingredients, using only the highest quality, human-grade tuna fillet with completely natural ingredients. Tuna is caught fresh from the sea using dolphin-friendly methods. ',70000,30,'catfood1.jpg'],
  [31,4,4,'TUNA WHOLE MEAT WITH SALMON IN JELLY 85g','Tuna whole meat with salmon in jelly recipe. It contains taurine to support heart and eye health.',20000,30,'catfood2.jpg'],
  [32,4,4,'TIN TUNA FILLET WITH PRAWN (CATS) 70g','Tuna is caught fresh from the sea using dolphin-friendly methods. This recipe also provides a natural source of taurine which is essential for proper functioning of the heart and eye.',30000,30,'catfood3.jpg'],
  [33,4,4,'HOLISTIC CAT ADULT, TURKEY & CRANBERRY 2.72kg','Cranberries are rich in Vitamin C and contain antioxidants that can neutralize free radicals in the body and thus prevent urinary tract infections. This recipe is further enhanced with organic ginger, known for its anti-inflammatory properties and promoting good digestion. ',920000,30,'catfood4.jpg'],
  [34,4,4,'INDOOR (HOME LIFE) 27 (4kg)','This food has a moderate fat content to ensure that your cat calorie intake is aligned with its level of activity, thus helping to maintain ideal weight.',1200000,30,'catfood5.jpg'],
  [35,4,4,'TUNA WHOLE MEAT WITH CHICKEN IN JELLY 85g','Tuna whole meat with chicken in jelly recipe. It contains taurine to support heart and eye health.',30000,30,'catfood6.jpg'],
  [36,4,4,'FINEST TUNA FILLET WITH SALMON 70g','Cats adore the taste of fish! And your feline friend will love you even more when you feed it with Fish4Cats Finest Tuna Fillet with Salmon. This is a healthy and delicious meal, rich in Omega-3 and features an easily-digestible protein.',35000,30,'catfood7.jpg'],
  [37,4,4,'CAT ADULT, INDOOR VITALITY, CHICKEN 2.72kg','1st Choice Indoor Vitality is formulated with carefully selected ingredients that are specifically designed for cats that enjoy our modern indoor lifestyle. It helps maintain a healthy body weight and is pH-balanced to reduce stone formation for a healthy urinary system.',9450000,30,'catfood8.jpg'],
  [38,4,4,'FELINE ADULT PERFECT WEIGHT 15lbs','Hill Science Diet Adult Perfect Weight dry cat food provides breakthrough nutrition formulated to help your cat achieve a healthy weight and improve quality of life.',1900000,30,'catfood9.jpg'],
  [39,4,4,'URINARY CARE FOR CATS 10kg','Royal Canin Urinary Care is designed to maintain urinary tract health in adult cats by regulating the mineral balance and maintaining a low urinary pH, leading to less concentrated urine.',2450000,30,'catfood10.jpg'],
  // Cat Litter
  [40,5,4,'ULTRA - PREMIUM CLUMPING CAT SAND 12kg','This ultra premium clumping clay litter features optimal odor control with its Smart Odor Shield technology, neutralizing odors for more than 40 days. Because OdourLock is ultra absorbent, it generates less waste and lasts longer.',600000,30,'catlitte1.jpg'],
  [41,5,4,'ORIGINAL LITTER 30L (13kg)','It makes use of the power of refined active wood fibers that effectively absorb and trap moisture and odors deep inside. This neutralizes odors so effectively that the cat litter can remain in the litter tray for up to seven weeks',980000,30,'catlitte2.jpg'],
  [42,5,4,'SMART PELLETS 20 Liters (10kg)','The soft clumping and non-sticking pellets are made with refined active wood fibers which are sustainable and biodegradable. They immediately absorb and trap moisture and odors deep inside.',800000,30,'catlitte3.jpg'],
  [43,5,4,'CAT LITTER - 30liter','Breeder Celect Cat Litter cares for your cat as well as for the environment! That is why the litter is made with 100% recycled paper and contains no additives or chemicals. ',600000,30,'catlitte4.jpg'],
  [44,5,4,'UNIVERSAL LITTER 40L (22kg)','The hygiene pellets are made of 100% natural plant fibers which are biodegradable and compostable. This litter is excellent in absorption and odor control with lasting moisture binding.',850000,30,'catlitte5.jpg'],
  [45,5,4,'SUPER PREMIUM CAT LITTER - TOFU 10L (4.5kg)','This cat litter is made from natural tofu residue and has no chemical additives. It is non-toxic, absorbing moisture and liquid within seconds before clumping, making it easy for you to scoop.',230000,30,'catlitte6.jpg'],
  [46,5,4,'CAT LITTER APPLE DELIGHT 10L','Fussie Apple Delight Cat Litter is is long-lasting and highly absorbent. It quickly forms a clump around liquid waste, has low tracking, and is 99.9% dust-free. With its sweet scent of apple, it goes tough on odors, but easy on your cat.',180000,30,'catlitte7.jpg'],
  [47,5,4,'SUPER PREMIUM CAT SAND (ZEOLITE & CHARCOAL) 10L (8.1kg)','This cat litter has high absorbency and clumps quickly, contains zeolite and charcoal which effectively and naturally eliminate odors. It has antibacterial properties and low dust content, making it easy to clean.',195000,30,'catlitte8.jpg'],
  [48,5,4,'WEE KITTY CLUMPING CORN LITTER 18L','The litter is made of natural, biodegradable corn, free of chemicals and additives. It is extra absorbent and traps ammonia odor within minutes.',835000,30,'catlitte9.jpg'],
  [49,5,4,'CAT LITTER 10L/7kg - CHARCOAL','It has high absorbency and reduced tracking, clumping instantly to make it easy for you to scoop and clean up. ',95000,30,'catlitte10.jpg'],
 //Cat Furniture    
 [50,6,4,'2 TIER WITH SCRATCH BOARD (BROWN)','It is a multi level cat scratching post which features a cozy hiding tunnel at the second level, for times when your little kitty need a little privacy. Your cat will absolutely love to climb and hang out on this towering post.',1850000,30,'catfuniture1.jpg'],
 [51,6,4,'TOWER','The Kitty City Play Tower promotes healthy exercise and prevents boredom and destructive behavior. Connect any Plug and Play toy to this play tower with the help of easy fitting openings.',760000,30,'catfuniture2.jpg'],
 [52,6,4,'COZY BED','Designed like a canopy bed for your cat, only better. This dual purpose sleep accessory doubles as a play center, with an activity platform and dangling nighty-night moon within paw reach.',790000,30,'catfuniture3.jpg'],
 [53,6,4,'CLIMBING HILL','Drapes make wonderful climbers for the adventure-seeking kitty, but the Climbing Hill makes for a more practical and long-lasting option. Satisfy multiple needs in one, compact module.',610000,30,'catfuniture4.jpg'],
 [54,6,4,'PLAY ZONE SCRATCHING POLE','The Kitty City Play Zone promotes healthy exercise and prevents boredom and destructive behavior. Made from special sturdy materials, fashioned with scratching pole and plastic balls.',3750000,30,'catfuniture5.jpg'],
 [55,6,4,'CAT SCRATCHER - SPRINKLES (PINK) (53x 22x 12cm)','This Cat Scratcher board is a perfect for keeping your furry friend claws healthy, the cardboard lets your cat claw to their hearts content. Sprinkle the scratcher board with the catnip provided and let your furry friend satisfy their natural instincts.',250,30,'catfuniture6.jpg'],
 [56,6,4,'SISAL POLE WITH TOYS (BROWN) (42x42x82cm)','This cat scratching pole satisfies your cat desire to scratch. It also comes with a dangling toy that will entertain your cat.',1330000,30,'catfuniture7.jpg'],
 [57,6,4,'CAT SCRATCHER WITH TOY','The cuddly toy is removable and lasts over time, making it great for your kitty snuggle time.',430000,30,'catfuniture8.jpg'],
 [58,6,4,'TRIANGLE WOODEN SCRATCHER (BEIGE)','Designed to provide entertainment for any feline and to prevent them from scratching furniture, carpets and other more precious items, the scratcher is sure to make life better for pet and owner alike.',4500000,30,'catfuniture9.jpg'],
 [59,6,4,'ARCH GROOMER','The Arch Groomer combs out loose hair and gives a soothing massage all in one action. This “hands-free” groomer has an arch covered with nibs inside and out for cats to rub up against.',665000,30,'catfuniture10.jpg']
      
     ];
        foreach ($products as $pr) {
            Product::create([
               'id'=>$pr[0],
                'product_category_id'=>$pr[1],
                'supplier_id' => $pr[2],
                'name' => $pr[3],
                'description' => $pr[4],
                'price' => $pr[5],
                'stock' => $pr[6],
                'img' => $pr[7],

            ]);
    }
}
}
