return $this->db->query("SELECT users.id as user_id, users.first_name, users.last_name,users.email,messages.id as message_id,
			messages.message,messages.created_at as message_created_time,messages.users_id as for_user_id,messages.created_by as from_user_id,
			comments.comment as comment, comments.id as comment_id, comments.created_at as comment_created, comments.created_by as sender
			FROM users 
			LEFT JOIN messages on users.id = messages.users_id
			LEFT JOIN comments on messages.id=comments.messages_id
			WHERE users.id =?", array($id))->result_array();