<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('forums')->delete();

        \DB::table('forums')->insert(array (
            0 =>
            array (
                'id' => 1,
                'position' => 0,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Blutopia Forums',
                'slug' => 'blutopia-forums',
                'description' => '',
                'parent_id' => 0,
                'created_at' => '2017-01-03 18:29:21',
                'updated_at' => '2017-01-03 18:29:21',
            ),
            1 =>
            array (
                'id' => 2,
                'position' => 1,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Tutorials',
                'slug' => 'tutorials',
                'description' => 'Post Helpful Tutorials Here!',
                'parent_id' => 18,
                'created_at' => '2017-03-23 21:25:22',
                'updated_at' => '2017-12-28 15:28:11',
            ),
            2 =>
            array (
                'id' => 3,
                'position' => 2,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Welcome',
                'slug' => 'welcome',
                'description' => 'Introduce Yourself Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-01 20:16:06',
                'updated_at' => '2017-12-27 18:19:07',
            ),
            3 =>
            array (
                'id' => 4,
                'position' => 3,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'General',
                'slug' => 'general',
                'description' => 'Talk About It All Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-01 20:35:52',
                'updated_at' => '2017-12-29 21:53:33',
            ),
            4 =>
            array (
                'id' => 5,
                'position' => 4,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Suggestions',
                'slug' => 'suggestions',
                'description' => 'Post All Suggestions Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-01 20:36:52',
                'updated_at' => '2017-12-30 00:23:01',
            ),
            5 =>
            array (
                'id' => 6,
                'position' => 5,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Bugs',
                'slug' => 'bugs',
                'description' => 'Post All Bugs Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-01 20:38:41',
                'updated_at' => '2017-12-26 05:43:57',
            ),
            6 =>
            array (
                'id' => 7,
                'position' => 6,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Feedback',
                'slug' => 'feedback',
                'description' => 'Post All Feedback Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-01 20:39:45',
                'updated_at' => '2017-12-19 19:18:55',
            ),
            7 =>
            array (
                'id' => 8,
                'position' => 7,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Announcements',
                'slug' => 'announcements',
                'description' => 'Site Announcements Here!',
                'parent_id' => 18,
                'created_at' => '2017-04-10 14:57:12',
                'updated_at' => '2017-12-26 13:53:48',
            ),
            8 =>
            array (
                'id' => 9,
                'position' => 20,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Staff Zone',
                'slug' => 'staff-zone',
                'description' => NULL,
                'parent_id' => 0,
                'created_at' => '2017-04-13 08:26:29',
                'updated_at' => '2017-04-13 08:26:29',
            ),
            9 =>
            array (
                'id' => 10,
                'position' => 21,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'General',
                'slug' => 'general',
                'description' => 'Talk About It All Here!',
                'parent_id' => 38,
                'created_at' => '2017-04-13 08:27:37',
                'updated_at' => '2017-11-26 21:51:14',
            ),
            10 =>
            array (
                'id' => 11,
                'position' => 8,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
            'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Music',
                'slug' => 'music',
                'description' => 'Discuss Music related things here!',
                'parent_id' => 18,
                'created_at' => '2017-04-13 13:06:53',
                'updated_at' => '2017-12-30 11:46:34',
            ),
            11 =>
            array (
                'id' => 12,
                'position' => 9,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Apps',
                'slug' => 'apps',
                'description' => 'Discuss Apps/Scripts Here For Mac, Windows, Linux, etc',
                'parent_id' => 18,
                'created_at' => '2017-07-10 11:19:38',
                'updated_at' => '2017-12-20 14:55:08',
            ),
            12 =>
            array (
                'id' => 13,
                'position' => 10,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Invites Section',
                'slug' => 'invites-section',
                'description' => 'For All Your Private Tracker Invite Needs!',
                'parent_id' => 0,
                'created_at' => '2017-10-28 18:53:33',
                'updated_at' => '2017-10-28 18:53:33',
            ),
            13 =>
            array (
                'id' => 14,
                'position' => 11,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
            'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Official Unlimited Invites',
                'slug' => 'official-unlimited-invites',
                'description' => 'Where Site Staff and Official Recruiters Can Make Their Unlimited Invite Topics !',
                'parent_id' => 44,
                'created_at' => '2017-10-28 19:01:55',
                'updated_at' => '2017-11-09 01:07:11',
            ),
            14 =>
            array (
                'id' => 15,
                'position' => 12,
                'num_topic' => NULL,
                'num_post' => NULL,
                'last_topic_id' => NULL,
                'last_topic_name' => NULL,
                'last_topic_slug' => NULL,
                'last_post_user_id' => NULL,
                'last_post_user_username' => NULL,
                'name' => 'Unofficial Invites',
                'slug' => 'unofficial-invites',
                'description' => 'Place where members can share their invites! NO SELLING OR TRADING!',
                'parent_id' => 44,
                'created_at' => '2017-10-28 19:06:21',
                'updated_at' => '2017-10-31 10:23:03',
            ),
        ));


    }
}