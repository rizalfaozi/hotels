<?php
use App\Models\Room;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      Room::insert([
            'user_id' => '2',
            'provinces_id' => '1',
            'name' => 'kanthil',
            'price' => '250000',
            'count' => '5',
            'type' => 'standart',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus velit nisl, congue in consectetur non, commodo sit amet est. Integer lorem massa, posuere vitae nisi nec, porta vulputate tellus. Aliquam et massa vel mauris hendrerit rhoncus at sagittis enim. Aliquam mattis, tortor ac pharetra tempus, neque libero auctor augue, non laoreet justo eros ac sem. Nam sem felis, semper posuere rutrum accumsan, eleifend sed turpis. Donec ornare, elit vitae dignissim interdum, erat dolor aliquam lectus, vitae commodo ex eros vel augue. Curabitur in purus vitae lorem facilisis rutrum. Donec mattis tellus turpis, at gravida est porta sed. Integer sed magna libero. Donec in vehicula dolor. Nullam ex purus, facilisis vel consequat in, maximus suscipit ex. Donec facilisis libero facilisis, ultrices lectus nec, rhoncus mi. Donec iaculis massa in venenatis viverra. Phasellus fringilla est at tellus rhoncus, sit amet scelerisque turpis tempor. Mauris commodo ante erat, id pulvinar nunc scelerisque at.  Aenean laoreet tincidunt fringilla. Duis eu erat urna. Donec viverra, nisl vitae semper varius, tellus neque cursus nunc, ultrices egestas felis massa in elit. Suspendisse porttitor lectus nisi, eget vestibulum turpis porttitor quis. Etiam pretium mattis lorem condimentum volutpat. Donec pretium nulla non tellus pellentesque, nec facilisis enim mollis. Ut eget hendrerit risus. Pellentesque justo purus, pulvinar a varius a, pretium vitae odio. Cras erat odio, maximus ac velit ac, fringilla interdum tortor.',
            'status' => '1',
            'created_at' => '2018-10-29 12:30:15'
        ]);

      Room::insert([
            'user_id' => '2',
            'provinces_id' => '1',
            'name' => 'kamboja',
            'price' => '750000',
            'count' => '4',
            'type' => 'deluxe',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus velit nisl, congue in consectetur non, commodo sit amet est. Integer lorem massa, posuere vitae nisi nec, porta vulputate tellus. Aliquam et massa vel mauris hendrerit rhoncus at sagittis enim. Aliquam mattis, tortor ac pharetra tempus, neque libero auctor augue, non laoreet justo eros ac sem. Nam sem felis, semper posuere rutrum accumsan, eleifend sed turpis. Donec ornare, elit vitae dignissim interdum, erat dolor aliquam lectus, vitae commodo ex eros vel augue. Curabitur in purus vitae lorem facilisis rutrum. Donec mattis tellus turpis, at gravida est porta sed. Integer sed magna libero. Donec in vehicula dolor. Nullam ex purus, facilisis vel consequat in, maximus suscipit ex. Donec facilisis libero facilisis, ultrices lectus nec, rhoncus mi. Donec iaculis massa in venenatis viverra. Phasellus fringilla est at tellus rhoncus, sit amet scelerisque turpis tempor. Mauris commodo ante erat, id pulvinar nunc scelerisque at.  Aenean laoreet tincidunt fringilla. Duis eu erat urna. Donec viverra, nisl vitae semper varius, tellus neque cursus nunc, ultrices egestas felis massa in elit. Suspendisse porttitor lectus nisi, eget vestibulum turpis porttitor quis. Etiam pretium mattis lorem condimentum volutpat. Donec pretium nulla non tellus pellentesque, nec facilisis enim mollis. Ut eget hendrerit risus. Pellentesque justo purus, pulvinar a varius a, pretium vitae odio. Cras erat odio, maximus ac velit ac, fringilla interdum tortor.',
            'status' => '1',
            'created_at' => '2018-10-29 12:30:15'
        ]);


       Room::insert([
            'user_id' => '2',
            'provinces_id' => '2',
            'name' => 'mawar',
            'price' => '750000',
            'count' => '3',
            'type' => 'superior',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus velit nisl, congue in consectetur non, commodo sit amet est. Integer lorem massa, posuere vitae nisi nec, porta vulputate tellus. Aliquam et massa vel mauris hendrerit rhoncus at sagittis enim. Aliquam mattis, tortor ac pharetra tempus, neque libero auctor augue, non laoreet justo eros ac sem. Nam sem felis, semper posuere rutrum accumsan, eleifend sed turpis. Donec ornare, elit vitae dignissim interdum, erat dolor aliquam lectus, vitae commodo ex eros vel augue. Curabitur in purus vitae lorem facilisis rutrum. Donec mattis tellus turpis, at gravida est porta sed. Integer sed magna libero. Donec in vehicula dolor. Nullam ex purus, facilisis vel consequat in, maximus suscipit ex. Donec facilisis libero facilisis, ultrices lectus nec, rhoncus mi. Donec iaculis massa in venenatis viverra. Phasellus fringilla est at tellus rhoncus, sit amet scelerisque turpis tempor. Mauris commodo ante erat, id pulvinar nunc scelerisque at.  Aenean laoreet tincidunt fringilla. Duis eu erat urna. Donec viverra, nisl vitae semper varius, tellus neque cursus nunc, ultrices egestas felis massa in elit. Suspendisse porttitor lectus nisi, eget vestibulum turpis porttitor quis. Etiam pretium mattis lorem condimentum volutpat. Donec pretium nulla non tellus pellentesque, nec facilisis enim mollis. Ut eget hendrerit risus. Pellentesque justo purus, pulvinar a varius a, pretium vitae odio. Cras erat odio, maximus ac velit ac, fringilla interdum tortor.',
            'status' => '1',
            'created_at' => '2018-10-29 12:30:15'
        ]);


        Room::insert([
            'user_id' => '2',
            'provinces_id' => '1',
            'name' => 'melati',
            'price' => '1000000',
            'count' => '2',
            'type' => 'suite',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus velit nisl, congue in consectetur non, commodo sit amet est. Integer lorem massa, posuere vitae nisi nec, porta vulputate tellus. Aliquam et massa vel mauris hendrerit rhoncus at sagittis enim. Aliquam mattis, tortor ac pharetra tempus, neque libero auctor augue, non laoreet justo eros ac sem. Nam sem felis, semper posuere rutrum accumsan, eleifend sed turpis. Donec ornare, elit vitae dignissim interdum, erat dolor aliquam lectus, vitae commodo ex eros vel augue. Curabitur in purus vitae lorem facilisis rutrum. Donec mattis tellus turpis, at gravida est porta sed. Integer sed magna libero. Donec in vehicula dolor. Nullam ex purus, facilisis vel consequat in, maximus suscipit ex. Donec facilisis libero facilisis, ultrices lectus nec, rhoncus mi. Donec iaculis massa in venenatis viverra. Phasellus fringilla est at tellus rhoncus, sit amet scelerisque turpis tempor. Mauris commodo ante erat, id pulvinar nunc scelerisque at.  Aenean laoreet tincidunt fringilla. Duis eu erat urna. Donec viverra, nisl vitae semper varius, tellus neque cursus nunc, ultrices egestas felis massa in elit. Suspendisse porttitor lectus nisi, eget vestibulum turpis porttitor quis. Etiam pretium mattis lorem condimentum volutpat. Donec pretium nulla non tellus pellentesque, nec facilisis enim mollis. Ut eget hendrerit risus. Pellentesque justo purus, pulvinar a varius a, pretium vitae odio. Cras erat odio, maximus ac velit ac, fringilla interdum tortor.',
            'status' => '1',
            'created_at' => '2018-10-29 12:30:15'
        ]);

        Room::insert([
            'user_id' => '2',
            'provinces_id' => '2',
            'name' => 'anggrek',
            'price' => '1500000',
            'count' => '1',
            'type' => 'executive',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus velit nisl, congue in consectetur non, commodo sit amet est. Integer lorem massa, posuere vitae nisi nec, porta vulputate tellus. Aliquam et massa vel mauris hendrerit rhoncus at sagittis enim. Aliquam mattis, tortor ac pharetra tempus, neque libero auctor augue, non laoreet justo eros ac sem. Nam sem felis, semper posuere rutrum accumsan, eleifend sed turpis. Donec ornare, elit vitae dignissim interdum, erat dolor aliquam lectus, vitae commodo ex eros vel augue. Curabitur in purus vitae lorem facilisis rutrum. Donec mattis tellus turpis, at gravida est porta sed. Integer sed magna libero. Donec in vehicula dolor. Nullam ex purus, facilisis vel consequat in, maximus suscipit ex. Donec facilisis libero facilisis, ultrices lectus nec, rhoncus mi. Donec iaculis massa in venenatis viverra. Phasellus fringilla est at tellus rhoncus, sit amet scelerisque turpis tempor. Mauris commodo ante erat, id pulvinar nunc scelerisque at.  Aenean laoreet tincidunt fringilla. Duis eu erat urna. Donec viverra, nisl vitae semper varius, tellus neque cursus nunc, ultrices egestas felis massa in elit. Suspendisse porttitor lectus nisi, eget vestibulum turpis porttitor quis. Etiam pretium mattis lorem condimentum volutpat. Donec pretium nulla non tellus pellentesque, nec facilisis enim mollis. Ut eget hendrerit risus. Pellentesque justo purus, pulvinar a varius a, pretium vitae odio. Cras erat odio, maximus ac velit ac, fringilla interdum tortor.',
            'status' => '1',
            'created_at' => '2018-10-29 12:30:15'
        ]);
        
    }
}
