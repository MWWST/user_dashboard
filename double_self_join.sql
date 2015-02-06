return $this->db->query("SELECT users.id as user_id, users.first_name, users.last_name,users.email,
			users2.first_name as message_sender_first,users2.last_name as message_sender_last,
			users3.first_name as comment_sender_first,users3.last_name as comment_sender_last,messages.id as message_id,
			messages.message,messages.created_at as message_created_time,messages.users_id as for_user_id,messages.created_by as from_user_id,
			comments.comment as comment, comments.id as comment_id, comments.created_at as comment_created, comments.created_by as sender
			FROM users
			LEFT JOIN messages on users.id = messages.users_id
			LEFT JOIN users AS users2 on users2.id = messages.created_by
			LEFT JOIN comments on messages.id=comments.messages_id
			LEFT JOIN users AS users3 ON users3.ID = comments.created_by
			WHERE users.id =?", array($id))->result_array();