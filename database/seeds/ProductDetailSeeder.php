<?php

use App\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 // product_id  'origin', 'ingredients', 'materials','color', 'size' ,'instruction',
 $products = [
   
                                                                                                           
   [1,'Made in Canada','Lamb meal, herring meal, brown rice, dried potato products, oat groats, brewer rice, pearled barley, vegetable oil ','' ,'' ,'15 kg','' ],
    [2,'Made in Canada','Salmon, chicken meal, brown rice,dried potatoes, pearled barley, oat groats, rice, herring meal, dried apple pomace, chicken fat preserved with natural mixed tocopherols','' ,'' ,'13.6 kg','' ],
    [3,'Made in UK','Additives (per kg) vitamins: Vitamin A 22,500 IU, vitamin D3 1,800 IU, vitamin E 700 IU, trace elements: zinc chelate of amino acid hydrate 600 mg','' ,'' ,'1.5 kg','' ],
    [4,'Made in USA','Dehydrated Lamb, Pearl Millet, Lamb Fat(preserved with mixed tocopherols), Coconut, Sun-Cured Alfalfa, Coconut Oil, Sun-Cured Kelp','' ,'' ,'10 kg',''],
    [5,'Made in USA','Chicken, Whole Grain Wheat, Cracked Pearled Barley, Whole Grain Sorghum, Whole Grain Corn, Corn Gluten Meal, Chicken Meal, Chicken Fat, Chicken Liver Flavor, Dried Beet Pulp, Soybean Oil','' ,'' ,'15 kg','' ],
    [6,'Made in USA','Lamb Meal, Brown Rice, Brewers Rice, Whole Grain Sorghum, Whole Grain Wheat, Corn Gluten Meal, Chicken Fat, Cracked Pearled Barley, Chicken Liver Flavor','' ,'' ,'12kg',''],
    [7,'Made in New Zealand','Beef meat, beef bone, beef blood, eggs, beef green tripe, beef liver, broccoli, cauliflower, carrot, silver beet (spinach),cabbage, apples, pears, beef hearts, beef kidneys and garlic.','' ,'' ,'3.6 kg','' ],
    [8,'Made in USA','Lamb Meal, Pork Meal, Pure Pearled Barley, Brown Rice, Natural Fish Oil (Preserved with Natural Mixed Tocopherols), Flaxseed Oil, Sunflower Oil, Garbanzo Beans, Cranberries, Blueberries','' ,'' ,'26 lbs','' ],
    [9,'Made in New Zealand','New Zealand Green Mussel, gelatine, Flaxseed, sunflower oil (preserved with tocopherols), dicalcium phosphate, Black Currant, Kiwifruit, Fish Oil, potassium carbonate, salt, choline chloride, mixed Tocopherols (preservatives)','' ,'' ,'425 grams','' ],
        
//    //Dog C//     [11,'origin','Ingredient','materials','color','size','instruction'],
    [10,'Made in Taiwan','' ,'' ,'Purple','Large (10cm)','Ideal for use on ice and snow, salt, liquid chloride, lawn chemicals, pesticides, fire ants, mud and clay, pad rashes, allergies, sand irritations, dog run bacteria, furniture and carpet stains, traction control, post-surgical infection, post- grooming soil, swimming pool liner tears, and hot pavement.'],
    [11,'Made in Taiwan' ,'','cotton','Dark Blue','Large (35cm)',''],
    [12,'Made in Taiwan' ,'','cotton','Grey','Medium (30cm)',''],
    [13,'Made in Taiwan' ,'','cotton','Blue','Medium (30cm)',''],
    [14,'Made in Taiwan' ,'','cotton','Fuchsia','Medium (30cm)',''],
    [15,'Made in Taiwan' ,'','cotton','Pink','Medium (30cm)',''],
    [16,'Made in Taiwan' ,'' ,'','Assorted','Large',''],
    [17,'Made in Taiwan' ,'','cotton','Assorted','Small (20-25 cm)',''],
    [18,'Made in Taiwan' ,'' ,'','Purple','Small',''],
    [19,'Made in Taiwan' ,'' ,'','Red, Blue and White','Small',''],
//      //Dog Toys//     [21,'origin','Ingredient','materials','color','size','instruction'],
    [20,'Made in UK' ,'','With peppermint flavor/scent.','White with blue','Approx 26 cm long','Fantastic dental chew toy with multiple texture, great for massaging gums and helping remove tartar. Dogs can chew, toss and fetch. Created into a triple rings, rope and 2 nylons.'],
    [21,'Made in USA' ,'','The toy is also made from the non-toxic material Zogoflex that is dishwasher safe for easy cleaning.','Green','10 cm','This treat-minded toy features a bowl-like shape which features rubber prongs that hold treats in place on the interior of the toy.'],
    [22,'Made in USA' ,'' ,'','Blue/Pink','Small 3" Height ','Veterinarians and trainers recommend stuffing the KONG Puppy with KONG treats or Ziggies to aid in crate training, decrease separation anxiety, promote proper chewing behavior, and deter misbehavior.'],
    [23,'Made in USA' ,'','nonabrasive tennis ball material','Green','Large 2.5inch',''],
    [24,'Made in USA' ,'','Made from the non-toxic material','Green','Medium',''],
    [25,'Made in USA' ,'' ,'','Dark blue','Small 10cm',''],
    [26,'Made in UK' ,'','Made from the non-toxic material','Orange','Medium',''],
    [27,'Made in USA' ,'','Plastic with non-toxic','Orange','Medium',''],
    [28,'Made in USA' ,'' ,'','Brown','40 cm long','This funny toy comes with a beep that would surely become one of your pet favorites.'],
    [29,'Made in USA' ,'','Non-toxic','Orange and purple','18 x 4 x 4 cm',''],
//   // Cat Food//     [31,'origin','Ingredient','materials','color','size','instruction'],
    [30,'Made in USA','Tuna Fillet 75%, Fish Broth 19%, Rice 6%.' ,'' ,'','156 grams',''],
    [31,'Made in Thailand','Tuna whole meat, salmon meat, polysaccharide gum, oligo sugar, vitamin E, water.' ,'' ,'','85g',''],
    [32,'Made in Thailand','Tuna Fillet 52%, Fish Broth 24%, Prawn 23%, Rice 1%' ,'' ,'','156 grams',''],
    [33,'Made in Canada','Turkey, chicken meal, brown rice, dried potatoes, pearled barley, oat groats, herring meal, organic dried cranberries, chicken fat preserved with natural mixed tocopherols (a source of vitamin E)' ,'' ,'','2.27 kg',''],
    [34,'Made in France','Chicken meal, brown rice, rice, corn, corn gluten meal, chicken fat, chicken, natural chicken flavor, pea fiber, rice flour, rice hulls, wheat gluten, dried beet pulp (sugar removed)' ,'' ,'','4 kg',''],
    [35,'Made in Thailand','Tuna whole meat, chicken liver, polysaccharide gum, oligo sugar, vitamin E, water.' ,'' ,'','85g',''],
    [36,'Made in Thailand','Tuna 65%, fish broth 26%, prawn 5%, rice 4%' ,'' ,'','70 grams',''],
    [37,'Made in Canada','Chicken, chicken meal, rice, pea protein, chicken fat naturally preserved with mixed tocopherol, beet pulp, brown rice, pearled barley, oat groats, dried egg product, natural flavor' ,'' ,'','2.72 kg',''],
    [38,'Made in Canada','Chicken, Brewers Rice, Corn Gluten Meal, Wheat Gluten, Powdered Cellulose, Chicken Meal, Dried Tomato Pomace, Dried Beet Pulp, Flaxseed, Chicken Fat, Chicken Liver Flavor, Coconut Oil' ,'' ,'','15 lbs',''],
    [39,'Made in France','Dehydrated poultry protein, maize, vegetable protein isolate, rice, wheat, animal fats, vegetable fibres, maize gluten, hydrolysed animal proteins, maize flour, minerals, beet pulp' ,'' ,'','10 kg',''],
//    // Cat Litte//  

    [40,'Made in Canada','Made with natural, pure clay.' ,'' ,'','12 kg','Use as a regular cat litter. Replace as and when needed.'],
    [41,'Made in Germany','100% natural organic fibers' ,'' ,'','13kg','Use as a regular bedding, clean, replace as needed. Litters may remain within 4-6 weeks. Totally clean your cat litter once a month.'],
    [42,'Made in Germany','100% pure organic fibers (natural plant derivatives)' ,'' ,'','10kg','Use as a cat litter. Replace and refill as and when needed. If possible, use one "personal" litter tray per cat. Cats are much more careful and cleaner with "their" litter when it is not used by other cats.'],
    [43,'Made in Germany','100% recycled paper.' ,'' ,'','15kg','Pour the pellets 2-4cm deep into the hutch. Change bedding once or twice weekly.'],
    [44,'Made in Germany','100% pure organic fibers.' ,'' ,'','22kg','Use as a litter, remove and replace once needed. Totally replace/clean thoroughly your litter system at least once a week.'],
    [45,'Made in Canada','Made with all Natural Tofu without Chemicals.' ,'' ,'','4.5kg','Pour cat sand into litter box till a height of 5cm. Remove dried droppings once or twice a day. scoop away all clumps and solids and maintain the level of 5cm height of litter.'],
    [46,'Made in Canada','With its sweet scent of apple, it goes tough on odors, but easy on your cat.' ,'' ,'','8.1kg','Fill your clean litter box with 3 to 4 inches of Fussie Cat Litter. For best results, do not mix with non-clumping cat Litter'],
    [47,'Made in Canada','100% natural with zeolite and charcoal' ,'' ,'','8.1kg','Pour Trustie Cat litter into litter tray till a height of 5cm to 8cm. Scrub your cat litter tray once a month.'],
    [48,'Made in Australia','Wee Kitty is made from 100% natural corn and natural plant fibers, combined with a binding agent and fragrance. It is a safe, natural based product.' ,'' ,'','9kg','How to provide the purrfect potty: First, cover your litter tray with a Rufus & Coco Elasticized Litter Tray Liner. Now, fill your litter tray with 2-3 cm of Rufus & Coco Wee Kitty Clumping Corn Litter. Once soiled, scoop up and discard clumped waste daily and stir pellets to aerate. Top up with fresh litter as needed and regularly replace the entire litter once a week.'],
    [49,'Made in Australia','Bentonite, with activated carbon' ,'' ,'','7kg','Step 1: Fill litter box with approximately 2-3 inches of Kit Cat Cat litter.Step 2: Kit cat cat litter is designed to form a clump around liquid water instantly. Scoop up and dispose of clumps and solids daily. Step 3: It is advisable to empty and clean entire litter box every month and dispose of contents in the bin.'],
     //Cat Furni//     [51,'origin','Ingredient','materials','color','size','instruction'],
    [50,'Made in USA' ,'','Wooden','Brown','D 45 X W 45 X H 45','This dual purpose sleep accessory doubles as a play center, with an activity platform and dangling nighty-night moon within paw reach.'],
    [51,'Made in USA' ,'','Wooden','Brown','D 45 X W 45 X H 79 cm','Connect any Plug and Play toy to this play tower with the help of easy fitting openings. This cat play tower includes ramps, platforms, and more that let your pets jump, leap, climb, and hide for hours of fun. Strong reinforced pipes and an overall durable construction makes it remain your pet favorite hangout for years.'],
    [52,'origin','Ingredient','materials','color','size','instruction'],
    [53,'Made in USA' ,'','Wooden and rope','Brown','44 x 45 x 45 cm','Drapes make wonderful climbers for the adventure-seeking kitty, but the Climbing Hill makes for a more practical and long-lasting option. Satisfy multiple needs in one, compact module.'],
    [54,'Made in USA' ,'','Wooden and rope','White','36 x 36 x 39 cm','The Kitty City Play Zone promotes healthy exercise and prevents boredom and destructive behavior. Made from special sturdy materials, fashioned with scratching pole and plastic balls.'],
    [55,'Made in Thailand' ,'','Paper and carton','Brown','52 x 21 x 10 cm','The product is a cardboard board that cats can scratch on. Maintains cat paw health and can also be used as a lounger outside of scratching. With added catnip to entice your cat.'],
    [56,'Made in Thailand' ,'','Wooden','Brown','42 x 42 x 82cm','This cat scratching pole satisfies your cat desire to scratch. It also comes with a dangling toy that will entertain your cat.'],
    [57,'Made in Canada' ,'','No mess, recyclable scratcher','color','1 piece',''],
    [58,'Made in USA' ,'','Wooden scratche','Beige','55 x 46 x 47cm','Designed to provide entertainment for any feline and to prevent them from scratching furniture, carpets and other more precious items, the scratcher is sure to make life better for pet and owner alike.'],
    [59,'Made in USA' ,'','Plastic non-toxic','Black','35 x 30 x 28 cm','The Arch Groomer combs out loose hair and gives a soothing massage all in one action.'],
 ];
    
    

    
    
    
    


   


 // `product_id`, `origin`, `ingredients`, `materials`, `color`, `size`, `instruction`, `created_at`, `updated_at`, `deleted_at`

foreach ($products as $pr) {
    ProductDetail::create([
        'product_id' => $pr[0],
        'origin' => $pr[1],
        'ingredients' => $pr[2],
        'materials' => $pr[3],
        'color' => $pr[4],
        'size' => $pr[5],
        'instruction' => $pr[5],
        
    ]);
}
 


// 
     
           
         
   
    }
}
