<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.1
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Posts extends Controller_Template {

	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index() {
		$posts = Model_Post::find( 'all' );

		//return Response::forge( View::forge( 'welcome/index' ) );
		//die( 'Post Index' );
		$data                  = array( 'posts' => $posts );
		$this->template->title = 'Home';
		//We must pass the parameter of FALSE otherwise our body text won't be parsed with it's HTML
		$this->template->content = View::forge( 'posts/index', $data, FALSE );
	}

	public function action_add() {

		if ( Input::post( 'send' ) ) {
			$post              = new Model_Post();
			$post->title       = Input::post( 'title' );
			$post->category    = Input::post( 'category' );
			$post->body        = Input::post( 'body' );
			$post->tags        = Input::post( 'tags' );
			$post->create_date = date( 'Y-m-d H:i:s' );

			//Save to database
			$post->save();

			Session::set_flash( 'success', 'Post saved to database' );

			Response::redirect( '/' );
		}

		//return Response::forge( View::forge( 'posts/add' ) );
		//die( 'Post Add' );
		$data                    = array();
		$this->template->title   = 'Add Post';
		$this->template->content = View::forge( 'posts/add', $data );
	}

	public function action_view( $id ) {
		$post = Model_Post::find( 'first', array(
			'where' => array(
				'id' => $id,
			),
		) );

		$data                    = array( 'posts' => $post );
		$this->template->title   = $post->title;
		$this->template->content = View::forge( 'posts/view', $data, FALSE );
	}

	public function action_edit( $id ) {

		if ( Input::post( 'send' ) ) {
			$post              = Model_Post::find( Input::post( 'post_id' ) );
			$post->title       = Input::post( 'title' );
			$post->category    = Input::post( 'category' );
			$post->body        = Input::post( 'body' );
			$post->tags        = Input::post( 'tags' );
			$post->create_date = date( 'Y-m-d H:i:s' );

			//Save to database
			$post->save();

			Session::set_flash( 'success', 'Post Updated' );

			Response::redirect( '/' );
		}

		$post = Model_Post::find( 'first', array(
			'where' => array(
				'id' => $id,
			),
		) );

		$data                    = array( 'posts' => $post );
		$this->template->title   = 'Edit Post';
		$this->template->content = View::forge( 'posts/edit', $data, FALSE );
	}

	public function action_delete( $id ) {
		$post = Model_Post::find( $id );
		$post->delete();

		Session::set_flash( 'success', 'Post Deleted' );

		Response::redirect( '/' );
	}
}
