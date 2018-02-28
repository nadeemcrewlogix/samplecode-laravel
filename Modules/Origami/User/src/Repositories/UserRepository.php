<?php 
	namespace Origami\User\Repositories;
	use Origami\User\Models\User;
	
	class UserRepository  
	{
		
		protected $user;

		// ------ [ Constructor ]-------------
		function __construct(User $user){
			$this->user = $user;
		}

		/*
		*
		*   @void param $id  
		*/
		public  function find($id) {
			return $this->user->find($id);
		}
		
		/*
		*
		*   @void param   
		*/
		public  function all() {
			
			return $this->user->all();
		}

		/*
		*
		*   @void param   
		*/
		public  function create($data) {
			
			return $this->user->create($data);
		}

		/*
		*
		*   @void param   
		*/
		public  function update($data) {

			return $this->user->where('id',$data['id'])->update($data);
		}

		/*
		*
		*   @void param   
		*/
		public  function delete($id) {

			return $this->user->where('id',$id)->delete();
		}

		/*
		*
		*   @void param $att   
		*   @void param $column  
		*/
		public  function findBy($att ,$column) {
			//
		}


	}